<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'id_jurusan', 'nama', 'email', 'password'];
}
