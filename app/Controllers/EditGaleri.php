<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class EditGaleri extends BaseController
{
    protected $galeriModel;
    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    public function index($ID)
    {
        $data = [
            'galeri' => $this->galeriModel->where('ID', $ID)->first(),
            'cek_valid_input' => \Config\Services::validation()
        ];
        return view('edit_galeri_page', $data);
    }

    public function simpan($ID)
    {
        if (!$this->validate([
            'inputGambar' => [
                'rules' => 'max_size[inputGambar,2048]|is_image[inputGambar]',
                'errors' => [
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
            return redirect()->to(base_url('galeri/edit/' . ($ID)))->withInput();
        }
        $fileGambar = $this->request->getFile('inputGambar');
        if ($fileGambar->getError() == 4) {
            $namaFileGambar = $this->request->getVar('namaGambarLama');
        } else {
            $namaFileGambar = $fileGambar->getName();
            $fileGambar->move('assets/img/galeri/', $namaFileGambar);
            unlink('assets/img/galeri/' . $this->request->getVar('namaGambarLama'));
        }
        $this->galeriModel->save([
            'ID' => $ID,
            'Nama_File' => $namaFileGambar,
            'Judul' => $this->request->getVar('inputJudul'),
            'Deskripsi' => $this->request->getVar('inputDeskripsi')
        ]);
        session()->setFlashdata('upload_berhasil', 'Berhasil!');
        return redirect()->to(base_url('galeri'));
    }
}
