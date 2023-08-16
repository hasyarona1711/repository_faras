<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailAuthorsModel extends Model
{
    protected $table = 'detail_author';
    protected $allowedFields = ['id_item', 'nama_depan', 'nama_belakang'];
}
