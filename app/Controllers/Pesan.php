<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Pesan extends BaseController
{
    protected $pesanModel;
    public function __construct()
    {
        $this->pesanModel = new PesanModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_kontak_user') ? $this->request->getVar('page_kontak_user') : 1;
        $data = [
            'pesan' => $this->pesanModel->paginate(4, 'kontak_user'),
            'pager' => $this->pesanModel->pager,
            'halamanSekarang' => $currentPage
        ];
        return view('pesan_member', $data);
    }

    public function hapus($ID)
    {
        $this->pesanModel->delete($ID);
        session()->setFlashdata('hapus_berhasil', 'Berhasil!');
        return redirect()->back();
    }
}
