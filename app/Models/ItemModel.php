<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'item';
    protected $allowedFields = ['id_tipe', 'id_jenjang', 'id_jurusan', 'id_sub_subjek', 'id_jenis_dokumen', 'id_user', 'judul', 'tahun', 'penulis', 'status', 'dosen_pembimbing', 'kata_kunci', 'referensi', 'email'];
    protected $useTimestamps = true;

    public function all()
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        return $builder;
    }
    public function search($keyword)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->like('judul', $keyword);
        $builder->orLike('kata_kunci', $keyword);
        return $builder;
    }
    public function advanced($array)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis, item.judul, item.tahun, item.id_jurusan, item.dosen_pembimbing, item.kata_kunci, item.id_jenis_dokumen, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->like($array);
        $builder->orLike($array);
        return $builder;
    }
    public function dokfakultas($id)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis, item.judul, item.tahun, item.id_jurusan, jurusan.id_fakultas, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->join('jurusan', 'jurusan.id = item.id_jurusan');
        $builder->where('jurusan.id_fakultas', $id);
        return $builder;
    }
    public function dokjurusan($id)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->where('item.id_jurusan', $id);
        return $builder;
    }
    public function dokjendok($id)
    {
        $builder = $this->table('item');
        $builder->select('item.id, item.penulis, item.judul, item.tahun, jenis_dokumen.nama');
        $builder->join('jenis_dokumen', 'jenis_dokumen.id = item.id_jenis_dokumen');
        $builder->where('item.id_jenis_dokumen', $id);
        return $builder;
    }
}
