<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class TambahGaleri extends BaseController
{
    protected $galeriModel;
    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    public function index()
    {
        $data = [
            'cek_valid_input' => \Config\Services::validation()
        ];
        return view('tambah_galeri_page', $data);
    }

    public function tambah()
    {
        if (!$this->validate([
            'inputGambar' => [
                'rules' => 'uploaded[inputGambar]|max_size[inputGambar,2048]|is_image[inputGambar]',
                'errors' => [
                    'uploaded' => 'Harap masukkan gambar!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
                    'is_image' => 'Format file tidak didukung!'
                ]
            ],
            'inputJudul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jangan dikosongkan!'
                ]
            ],
            'inputDeskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jangan dikosongkan!'
                ]
            ]
        ])) {
            return redirect()->to(base_url('tambahgaleri'))->withInput();
        }
        $fileGambar = $this->request->getFile('inputGambar');
        $fileGambar->move('assets/img/galeri');
        $namaFileGambar = $fileGambar->getName();

        $this->galeriModel->save([
            'Nama_File' => $namaFileGambar,
            'Judul' => $this->request->getVar('inputJudul'),
            'Deskripsi' => $this->request->getVar('inputDeskripsi')
        ]);

        session()->setFlashdata('upload_berhasil', 'Berhasil!');
        return redirect()->to(base_url('tambahgaleri'));
    }
}
