<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->has('namaLogin')) {
            return redirect()->to(base_url('login'));
        } else {
            if (session()->get('emailLogin') !== 'admin_aprimivimanda@gmail.com') {
                session()->setFlashdata('upaya_gagal', 'Gagal!');
                return redirect()->to(base_url());
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
