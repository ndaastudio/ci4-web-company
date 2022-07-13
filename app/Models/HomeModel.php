<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'kontak_user';
    protected $allowedFields = [
        'Nama',
        'Email',
        'Telepon',
        'Pesan'
    ];
}
