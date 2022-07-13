<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'data_galeri';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'Nama_File',
        'Judul',
        'Deskripsi'
    ];
}
