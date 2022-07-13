<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Edit extends BaseController
{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index($ID)
    {
        $data = [
            'cek_valid_input' => \Config\Services::validation(),
            'user' => $this->memberModel->where('ID', $ID)->first()
        ];
        return view('edit_page', $data);
    }

    public function simpan($ID)
    {
        if (!$this->validate([
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
            'inputTelepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jangan dikosongkan!'
                ]
            ]
        ])) {
            return redirect()->to(base_url('edit/' . ($ID)))->withInput();
        }
        if ($this->request->getVar('inputGender') === '') {
            $genderMember = $this->request->getVar('inputGenderLama');
        } else {
            $genderMember = $this->request->getVar('inputGender');
        }
        $this->memberModel->save([
            'ID' => $ID,
            'Nama' => $this->request->getVar('inputNama'),
            'Domisili' => $this->request->getVar('inputDomisili'),
            'Gender' => $genderMember,
            'Telepon' => $this->request->getVar('inputTelepon')
        ]);
        session()->setFlashdata('simpan_berhasil', 'Berhasil!');
        return redirect()->to(base_url('member'));
    }
}
