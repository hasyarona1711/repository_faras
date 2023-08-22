<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'item';
    protected $allowedFields = ['id_tipe', 'id_jenjang', 'id_jurusan', 'id_fakultas', 'id_sub_subjek', 'id_jenis_dokumen', 'username', 'nim', 'judul', 'abstrak', 'tahun', 'penulis_depan', 'penulis_belakang', 'status', 'dosen_pembimbing', 'kata_kunci', 'referensi', 'email'];
    protected $useTimestamps = true;

    public function all()
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis_depan, item.penulis_belakang, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->orderBy('item.id', 'DESC');
        return $builder;
    }
    public function search($keyword)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis_depan, item.penulis_belakang , item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->like('judul', $keyword);
        $builder->orLike('penulis_depan', $keyword);
        $builder->orLike('penulis_belakang', $keyword);
        $builder->orderBy('item.id', 'DESC');
        return $builder;
    }
    public function advanced($array)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis_depan, item.penulis_belakang, item.judul, item.tahun, item.id_jurusan, item.dosen_pembimbing, item.kata_kunci, item.id_jenis_dokumen, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        if ($array['judul']) {
            $builder->like('judul', $array['judul']);
        }
        if ($array['penulis_depan']) {
            $builder->orLike('penulis_depan', $array['penulis_depan']);
        }
        if ($array['penulis_belakang']) {
            $builder->orLike('penulis_belakang', $array['penulis_belakang']);
        }
        if ($array['id_jurusan']) {
            $builder->orLike('id_jurusan', $array['id_jurusan']);
        }
        if ($array['id_fakultas']) {
            $builder->orLike('id_fakultas', $array['id_fakultas']);
        }
        if ($array['tahun']) {
            $builder->orLike('tahun', $array['tahun']);
        }
        if ($array['dosen_pembimbing']) {
            $builder->orLike('dosen_pembimbing', $array['dosen_pembimbing']);
        }
        if ($array['id_jenis_dokumen']) {
            $builder->orLike('id_jenis_dokumen', $array['id_jenis_dokumen']);
        }
        $builder->orderBy('item.id', 'DESC');
        return $builder;
    }
    public function dokfakultas($id)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis_depan, item.penulis_belakang, item.judul, item.tahun, item.id_jurusan, jurusan.id_fakultas, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->join('jurusan', 'jurusan.id = item.id_jurusan');
        $builder->where('jurusan.id_fakultas', $id);
        $builder->orderBy('item.id', 'DESC');
        return $builder;
    }
    public function dokjurusan($id)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis_depan, item.penulis_belakang, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->where('item.id_jurusan', $id);
        $builder->orderBy('item.id', 'DESC');
        return $builder;
    }
    public function dokjendok($id)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis_depan, item.penulis_belakang, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->where('item.id_jenis_dokumen', $id);
        $builder->orderBy('item.id', 'DESC');
        return $builder;
    }
}
