<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Form extends BaseController
{
    public function index()
    {
        return view('form_validation');
    }

    public function submit()
    {
        $validation = service('validation');

        // Aturan validasi
        $rules = [
            'username' => 'required|min_length[5]|max_length[20]',
            'password' => 'required|min_length[8]'
        ];

        if ($this->request->getMethod() === 'post') {
            if ($validation->setRules($rules)->run($this->request->getPost())) {
                // Data valid, lakukan sesuatu (misalnya, simpan ke database)
            } else {
                // Validasi gagal, kembali ke halaman form dengan pesan kesalahan
                return redirect()->to('/form')->withInput()->with('validation', $validation);
            }
        }
    }
}
