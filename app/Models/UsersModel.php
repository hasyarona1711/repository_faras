<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'id_jurusan', 'nama', 'email', 'password'];
}
