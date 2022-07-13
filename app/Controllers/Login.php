<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Login extends BaseController
{

    public function index()
    {
        $data = [
            'cek_valid_input' => \Config\Services::validation()
        ];
        return view('login_page', $data);
    }

    public function masuk()
    {
        if (!$this->validate([
            'inputNama' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Jangan dikosongkan!',
                    'alpha_space' => 'Format penulisan tidak sesuai!'
                ]
            ],
            'inputEmail' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jangan dikosongkan!'
                ]
            ],
            'inputPassword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jangan dikosongkan!'
                ]
            ]
        ])) {
            return redirect()->to(base_url('login'))->withInput();
        }

        $usersModel = new MemberModel();
        $username = $this->request->getPost('inputNama');
        $email = $this->request->getPost('inputEmail');
        $password = $this->request->getPost('inputPassword');
        $user = $usersModel->where('Email', $email)->first();

        if (empty($user)) {
            session()->setFlashdata('login_gagal', 'Email Tidak Terdaftar');
            return redirect()->to(base_url('login'));
        }
        if ($user['Password'] != $password) {
            session()->setFlashdata('login_gagal', 'Password Salah');
            return redirect()->to(base_url('login'));
        }
        session()->set('namaLogin', $username);
        session()->set('emailLogin', $email);
        return redirect()->to(base_url());
    }
}
