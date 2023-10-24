<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function process()
    {
        $validation = service('validation');

        // Aturan validasi
        $rules = [
            'name' => [
                'label' => 'Nama',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'min_length' => 'Panjang kolom {field} minimal 5 karakter.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'valid_email' => 'Kolom {field} harus berisi alamat email yang valid.',
                    'is_unique' => 'Alamat email {field} sudah terdaftar.'
                ]
            ],
            'password' => [
                'label' => 'Kata Sandi',
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'min_length' => 'Panjang kolom {field} minimal 8 karakter.'
                ]
            ]
        ];

        if ($this->request->getMethod() === 'post') {
            if ($validation->setRules($rules)->run($this->request->getPost())) {
                // Data valid, lakukan sesuatu (misalnya, simpan ke database)
                return 'Registration successful!';
            } else {
                // Validasi gagal, kembali ke halaman form dengan pesan kesalahan
                return view('register');
            }
        }
    }
}
