<?php

namespace App\Models;

use CodeIgniter\Model;

class AttachmentModel extends Model
{
    protected $table = 'att_files';
    protected $allowedFields = ['id_item', 'judul', 'content', 'type', 'visible', 'language', 'deskripsi', 'size', 'file'];
}
