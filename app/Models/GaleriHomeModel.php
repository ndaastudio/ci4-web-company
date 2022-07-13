<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriHomeModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('data_galeri')->get()->getResultArray();
    }
}
