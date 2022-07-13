<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Register extends BaseController
{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $data = [
            'cek_valid_input' => \Config\Services::validation()
        ];
        return view('register_page', $data);
    }

    public function daftar()
    {
        if (!$this->validate([
            'inputEmail' => [
                'rules' => 'required|is_unique[data_user.Email]',
                'errors' => [
                    'required' => 'Jangan dikosongkan!',
                    'is_unique' => 'Email ini sudah terdaftar!'
                ]
            ],
            'inputPassword' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Jangan dikosongkan!',
                    'min_length' => 'Password terlalu pendek!'
                ]
            ],
            'inputNama' => [
                'rules' => 'required|alpha_space|min_length[3]',
                'errors' => [
                    'required' => 'Jangan dikosongkan!',
                    'alpha_space' => 'Format penulisan tidak sesuai!',
                    'min_length' => 'Nama terlalu pendek!'
                ]
            ],
            'inputDomisili' => [
                'rules' => 'required|alpha_space|min_length[3]',
                'errors' => [
                    'required' => 'Jangan dikosongkan!',
                    'alpha_space' => 'Format penulisan tidak sesuai!',
                    'min_length' => 'Nama domisili terlalu pendek!'
                ]
            ],
            'inputGender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan pilih gender anda (Pria/Wanita)!'
                ]
            ],
            'inputTelepon' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Jangan dikosongkan!',
                    'min_length' => 'Harap masukkan nomor telepon yang lengkap!'
                ]
            ]
        ])) {
            return redirect()->to(base_url('register'))->withInput();
        }
        $telepon = $this->request->getVar('inputTelepon');

        $this->memberModel->save([
            'Email' => $this->request->getVar('inputEmail'),
            'Password' => $this->request->getVar('inputPassword'),
            'Nama' => $this->request->getVar('inputNama'),
            'Domisili' => $this->request->getVar('inputDomisili'),
            'Gender' => $this->request->getVar('inputGender'),
            'Telepon' => $this->request->getVar('inputTelepon')
        ]);

        session()->setFlashdata('daftar_berhasil', 'Berhasil!');
        session()->set('noTelepon', $telepon);
        return redirect()->to(base_url('login'));
    }
}
