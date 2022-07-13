<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController
{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_data_user') ? $this->request->getVar('page_data_user') : 1;
        $data = [
            'member' => $this->memberModel->paginate(4, 'data_user'),
            'pager' => $this->memberModel->pager,
            'halamanSekarang' => $currentPage
        ];
        return view('member_page', $data);
    }

    public function hapus($ID)
    {
        $this->memberModel->delete($ID);
        session()->setFlashdata('hapus_berhasil', 'Berhasil!');
        return redirect()->back();
    }

    public function logout()
    {
        session()->remove('isLoggedIn');
        session()->remove('isAdmin');
        session()->remove('namaLogin');
        session()->remove('emailLogin');
        session()->remove('noTelepon');
        return redirect()->to(base_url());
    }
}
