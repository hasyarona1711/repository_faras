<?php

namespace App\Controllers;

use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\JendokModel;
use App\Models\TipeModel;
use App\Models\ItemModel;
use App\Models\AttachmentModel;
use App\Models\DetailAuthorsModel;
use App\Models\JenjangModel;
use DateTime;

class Dokumen extends BaseController
{
    protected $fakultasModel;
    protected $jurusanModel;
    protected $jendokModel;
    protected $tipeModel;
    protected $itemModel;
    protected $attModel;
    protected $authorModel;
    protected $jenjangModel;

    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
        $this->jurusanModel = new JurusanModel();
        $this->jendokModel = new JendokModel();
        $this->tipeModel = new TipeModel();
        $this->itemModel = new ItemModel();
        $this->attModel = new AttachmentModel();
        $this->authorModel = new DetailAuthorsModel();
        $this->jenjangModel = new JenjangModel();
    }
    public function fakultas()
    {
        $fakultas = $this->fakultasModel->findAll();
        $data = [
            'title' => 'Fakultas',
            'dokumen' => $fakultas
        ];
        return view('pages/koleksi', $data);
    }
    public function filefakultas($id)
    {
        $result = $this->itemModel->dokfakultas($id);
        $data = [
            'title' => 'Dokumen',
            'keyword' => 'Fakultas',
            'dokumen' => $result->paginate(10),
            'pager' => $this->itemModel->pager
        ];
        return view('pages/dokumen', $data);
    }

    public function jurusan()
    {
        $jurusan = $this->jurusanModel->findAll();
        $data = [
            'title' => 'Jurusan',
            'dokumen' => $jurusan
        ];
        return view('pages/koleksi', $data);
    }
    public function filejurusan($id)
    {
        $jurusan = $this->jurusanModel->find($id);
        $result = $this->itemModel->dokjurusan($id);
        $data = [
            'title' => 'Dokumen Jurusan',
            'keyword' => $jurusan['nama'],
            'dokumen' => $result->paginate(10),
            'pager' => $this->itemModel->pager
        ];
        return view('pages/dokumen', $data);
    }

    public function jenis_dokumen()
    {
        $jendok = $this->jendokModel->findAll();
        $data = [
            'title' => 'Jenis Dokumen',
            'dokumen' => $jendok
        ];
        return view('pages/koleksi', $data);
    }
    public function filejenis($id)
    {
        $jendok = $this->jendokModel->find($id);
        $result = $this->itemModel->dokjendok($id);
        $data = [
            'title' => 'Dokumen',
            'keyword' => $jendok['nama'],
            'dokumen' => $result->paginate(10),
            'pager' => $this->itemModel->pager
        ];
        return view('pages/dokumen', $data);
    }
    public function add()
    {
        $db = db_connect();
        $result = $db->query('SELECT * FROM `att_files` WHERE id_item is null');
        $datafile = $result->getResultArray();
        if ($datafile) {
            $jenjang = $this->jenjangModel->findAll();
            $fakultas = $this->fakultasModel->findAll();
            $jurusan = $this->jurusanModel->findAll();
            $tipeitem = $this->tipeModel->findAll();
            $jendok = $this->jendokModel->findAll();
            $data = [
                'tipeitem' => $tipeitem,
                'jenjang' => $jenjang,
                'fakultas' => $fakultas,
                'jurusan' => $jurusan,
                'jendok' => $jendok,
                'files' => $datafile
            ];
            return view('user/upload', $data);
        }

        $tipeitem = $this->tipeModel->findAll();
        $jenjang = $this->jenjangModel->findAll();
        $fakultas = $this->fakultasModel->findAll();
        $jurusan = $this->jurusanModel->findAll();
        $jendok = $this->jendokModel->findAll();
        $files = '';
        $data = [
            'tipeitem' => $tipeitem,
            'jenjang' => $jenjang,
            'fakultas' => $fakultas,
            'jurusan' => $jurusan,
            'jendok' => $jendok,
            'files' => $files
        ];
        return view('user/upload', $data);
    }

    public function index()
    {
        $result = $this->itemModel->all();
        $data = [
            'title' => ' Latest',
            'keyword' => 'Addition',
            'dokumen' => $result->paginate(10),
            'pager' => $this->itemModel->pager
        ];
        return view('pages/dokumen', $data);
    }

    public function detail($iddokumen)
    {
        $dokumen = $this->itemModel->find($iddokumen);
        $idjendok = $dokumen['id_jenis_dokumen'];
        $jenisdokumen = $this->jendokModel->find($idjendok);
        $penulis = $dokumen['penulis'];
        $author = $this->authorModel->where('id_item', $iddokumen)->findAll();
        $att_files = $this->attModel->where('id_item', $iddokumen)->findAll();
        $idjurusan = $dokumen['id_jurusan'];
        $jurusan = $this->jurusanModel->find($idjurusan);
        $idfakultas = $jurusan['id_fakultas'];
        $fakultas = $this->fakultasModel->find($idfakultas);
        $time = $dokumen['created_at'];
        $datetime = new DateTime($time);
        $created_tanggal = $datetime->format('Y-m-d');
        $created_time = $datetime->format('H:i:s');
        $data = [
            "dokumen" => $dokumen,
            "jendok" => $jenisdokumen,
            "penulis" => $penulis,
            "author" => $author,
            "attachment" => $att_files,
            "jurusan" => $jurusan,
            "fakultas" => $fakultas,
            "tanggal" => $created_tanggal,
            "waktu" => $created_time
        ];
        return view('pages/detail', $data);
    }
    public function search()
    {
        $keyword = $this->request->getVar('keyword');
        $result = $this->itemModel->search($keyword);

        $data = [
            'title' => 'Search for',
            'keyword' => $keyword,
            'dokumen' => $result->paginate(10),
            'pager' => $this->itemModel->pager
        ];
        return view('pages/dokumen', $data);
    }
    public function advanced()
    {
        $judul = $this->request->getVar('judul');
        $jurusan = $this->request->getVar('jurusan');
        $author = $this->request->getVar('author');
        $fakultas = $this->request->getVar('fakultas');
        $tahun = $this->request->getVar('tahun');
        $dospem = $this->request->getVar('dospem');
        $jendok = $this->request->getVar('jendok');
        $array = [
            'judul' => $judul,
            'penulis' => $author,
            'id_jurusan' => $jurusan,
            'id_fakultas' => $fakultas,
            'tahun' => $tahun,
            'dosen_pembimbing' => $dospem,
            'id_jenis_dokumen' => $jendok
        ];
        $result = $this->itemModel->advanced($array);
        $data = [
            'title' => 'Advanced Search',
            'keyword' => 'Result',
            'dokumen' => $result->paginate(10),
            'pager' => $this->itemModel->pager
        ];
        return view('pages/dokumen', $data);
    }
    public function savelampiran()
    {
        $submit = $this->request->getVar('submit-modal');
        if ($submit) {
            $uploadfile = $this->request->getFile('upload-file');
            $nama = $uploadfile->getName();
            $namafile = substr($nama, 0, strrpos($nama, '.'));
            $sizefile = $uploadfile->getSize();
            $kontenFile = $this->request->getVar('konten-file');
            $tipeFile = $this->request->getVar("tipe-file");
            $deskripsiFile = $this->request->getVar("deskripsi-file");
            $visibleFile = $this->request->getVar("visible-file");
            $bahasaFile = $this->request->getVar("bahasa-file");
            // upload file
            $uploadfile->move('files');
            $this->attModel->save([
                // 'id_item' => 'NULL',
                'judul' => $namafile,
                'content' => $kontenFile,
                'type' => $tipeFile,
                'visible' => $visibleFile,
                'language' => $bahasaFile,
                'deskripsi' => $deskripsiFile,
                'size' => $sizefile,
                'file' => $uploadfile
            ]);
        }
        return redirect()->to('/dokumen/add');
    }
    public function deletefiles($id)
    {
        $this->attModel->delete($id);
        return redirect()->to('/dokumen/savelampiran');
    }

    public function editlampiran()
    {
        $idfile = $this->request->getVar('id-file');
        $kontenFile = $this->request->getVar('konten-file');
        $tipeFile = $this->request->getVar("tipe-file");
        $deskripsiFile = $this->request->getVar("deskripsi-file");
        $visibleFile = $this->request->getVar("visible-file");
        $bahasaFile = $this->request->getVar("bahasa-file");
        $data = [
            'content' => $kontenFile,
            'type' => $tipeFile,
            'visible' => $visibleFile,
            'language' => $bahasaFile,
            'deskripsi' => $deskripsiFile
        ];
        $this->attModel->update($idfile, $data);
        return redirect()->to('/dokumen/savelampiran');
    }
    public function saveFile()
    {
        $tgl = $this->request->getVar('tgl_publikasi');
        $date = new DateTime($tgl);
        $tahun = $date->format('Y');
        $tipeitem = $this->request->getVar('tipe-item');
        $jumlahauthor = $this->request->getVar('jumlahauthor');
        $namadepan = array();
        $namabelakang = array();
        for ($i = 1; $i <= $jumlahauthor; $i++) {
            $namadepan[$i] = $this->request->getVar('namadepan' . $i);
            $namabelakang[$i] = $this->request->getVar('namabelakang' . $i);
        }
        $penulis = $namadepan[1] . ' ' . $namabelakang[1];
        $nim = $this->request->getVar('nim');
        $judul = $this->request->getVar('judul');
        $abstrak = $this->request->getVar('abstrak');
        $jenjang = $this->request->getVar('jenjang');
        $jurusan = $this->request->getVar('jurusan');
        $jendok = $this->request->getVar('jendok');
        $dospem = $this->request->getVar('dospem');
        $status = $this->request->getVar('status');
        $email = $this->request->getVar('email');
        $katakunci = $this->request->getVar('kata_kunci');
        $referensi = $this->request->getVar('referensi');
        $subjek = $this->request->getVar('subjek');
        if ($subjek = 1) {
            $subsubjek = $this->request->getVar('subsubjek1');
        } else {
            $subsubjek = $this->request->getVar('subsubjek2');
        }
        $this->itemModel->save([
            'id_tipe' => $tipeitem,
            'id_jenjang' => $jenjang,
            'id_jurusan' => $jurusan,
            'id_sub_subjek' => $subsubjek,
            'id_jenis_dokumen' => $jendok,
            'id_user' => $nim,
            'judul' => $judul,
            'tahun' => $tahun,
            'penulis' => $penulis,
            'status' => $status,
            'dosen_pembimbing' => $dospem,
            'kata_kunci' => $katakunci,
            'referensi' => $referensi,
            'email' => $email
        ]);
        //untuk save id item ke dalam database att_files
        $db = db_connect();
        $resultfile = $db->query('SELECT * FROM `att_files` WHERE id_item is null');
        $resultitem = $db->query('SELECT id FROM item ORDER BY id DESC LIMIT 1');
        $datafile = $resultfile->getResultArray();
        $iditem = $resultitem->getResultArray();
        $id = $iditem[0];
        $dataid = [
            'id_item' => $id['id']
        ];
        foreach ($datafile as $data) {
            $this->attModel->update($data['id'], $dataid);
        }
        //save author
        for ($x = 1; $x <= $jumlahauthor; $x++) {
            $this->authorModel->save([
                'id_item' => $id['id'],
                'nama_depan' => $namadepan[$x],
                'nama_belakang' => $namabelakang[$x]
            ]);
        }
        //setelah selesai save file
        $data = [
            'judul' => $judul
        ];
        return view('user/preview', $data);
    }
    // public function hasilsave()
    // {
    //     return view('user/preview');
    // }
}
