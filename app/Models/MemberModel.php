<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'data_user';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'Email',
        'Password',
        'Nama',
        'Domisili',
        'Gender',
        'Telepon'
    ];
}
