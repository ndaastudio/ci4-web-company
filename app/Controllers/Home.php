<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\GaleriHomeModel;

class Home extends BaseController
{
    protected $homeModel;
    public function __construct()
    {
        $this->homeModel = new HomeModel();
    }

    public function index()
    {
        $galeriHomeModel = new GaleriHomeModel();
        $data = [
            'galeri' => $galeriHomeModel->getAllData(),
            'email_admin' => session()->get('emailLogin'),
            'nama_member' => session()->get('namaLogin')
        ];
        return view('home_page', $data);
    }

    public function kirim()
    {
        $this->homeModel->save([
            'Nama' => $this->request->getVar('inputNama'),
            'Email' => $this->request->getVar('inputEmail'),
            'Telepon' => $this->request->getVar('inputTelepon'),
            'Pesan' => $this->request->getVar('inputPesan')
        ]);

        session()->setFlashdata('pesan_berhasil', 'Berhasil!');
        return redirect()->to(base_url());
    }
}
