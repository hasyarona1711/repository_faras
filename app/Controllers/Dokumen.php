<?php

namespace App\Controllers;

use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\JendokModel;
use App\Models\TipeModel;
use App\Models\ItemModel;
use App\Models\AttachmentModel;
use App\Models\AuthorsModel;
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

    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
        $this->jurusanModel = new JurusanModel();
        $this->jendokModel = new JendokModel();
        $this->tipeModel = new TipeModel();
        $this->itemModel = new ItemModel();
        $this->attModel = new AttachmentModel();
        $this->authorModel = new AuthorsModel();
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

    public function jurusan()
    {
        $jurusan = $this->jurusanModel->findAll();
        $data = [
            'title' => 'Jurusan',
            'dokumen' => $jurusan
        ];
        return view('pages/koleksi', $data);
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
    public function add()
    {
        $tipeitem = $this->tipeModel->findAll();
        $x = 0;
        $data = [
            'tipeitem' => $tipeitem,
            'n' => $x
        ];
        return view('user/upload', $data);
    }
    // public function saveFile()
    // {
    //     // $file_name = $_FILES['upload-file']['name'];
    //     // $file_size = $_FILES['upload-file']['size'];
    //     // $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    //     // $new_file_name = uniqid() . '.' . $file_ext;
    //     $tipeItem = $this->request->getVar('tipe-item');
    //     $kontenFile = $this->request->getVar('konten-file');
    //     $tipeFile = $this->request->getVar("tipe-file");
    //     $deskripsiFile = $this->request->getVar("deskripsi-file");
    //     $visibleFile = $this->request->getVar("visible-file");
    //     $bahasaFile = $this->request->getVar("bahasa-file");
    //     $uploadFile = $this->request->getFile("upload-file");
    //     dd($uploadFile);
    // }

    public function all()
    {
        $db = db_connect();
        $result = $db->query("SELECT item.id, item.tahun, item.judul, authors.nama_depan, authors.nama_belakang,  jenis_dokumen.nama  FROM item JOIN authors  on item.id_author=authors.id JOIN jenis_dokumen on item.id_jenis_dokumen=jenis_dokumen.id ");
        $dokumen = $result->getResultArray();
        $data = [
            'judul' => 'Semua Fakultas',
            'dokumen' => $dokumen
        ];
        return view('pages/dokumen', $data);
    }

    public function detail($iddokumen)
    {
        $dokumen = $this->itemModel->find($iddokumen);
        $idjendok = $dokumen['id_jenis_dokumen'];
        $jenisdokumen = $this->jendokModel->find($idjendok);
        $idauthor = $dokumen['id_author'];
        $author = $this->authorModel->find($idauthor);
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
            "author" => $author,
            "attachment" => $att_files,
            "jurusan" => $jurusan,
            "fakultas" => $fakultas,
            "tanggal" => $created_tanggal,
            "waktu" => $created_time
        ];
        return view('pages/detail', $data);
    }
}
