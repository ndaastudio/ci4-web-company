<?php

namespace App\Controllers;

use App\Models\GaleriHomeModel;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
    protected $galeriHomeModel;
    protected $galeriModel;
    public function __construct()
    {
        $this->galeriHomeModel = new GaleriHomeModel();
        $this->galeriModel = new GaleriModel();
    }

    public function index()
    {
        $galeriHomeModel = new GaleriHomeModel();
        $data = [
            'galeri' => $galeriHomeModel->getAllData(),
        ];
        return view('galeri_page', $data);
    }

    public function hapus($ID)
    {
        $galeri = $this->galeriModel->find($ID);
        unlink('assets/img/galeri/' . $galeri['Nama_File']);

        $this->galeriModel->delete($ID);
        session()->setFlashdata('hapus_berhasil', 'Berhasil!');
        return redirect()->to(base_url('galeri'));
    }
}
