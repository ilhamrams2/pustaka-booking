<?php

namespace App\Controllers;

use App\Models\Siswa;
use App\Controllers\BaseController;

class SiswaController extends BaseController
{
    public function index()
    {
        $siswaModel = new Siswa();
        $data['siswas'] = $siswaModel->findAll();
        return view('siswa/index', $data);
    }
    public function create()
    {
        return view('siswa/create');
    }
    public function store()
    {
        try {
            $siswaModel = new Siswa();
            $dataToInsert = [
                'nis' => $this->request->getVar('nis'),
                'nama' => $this->request->getVar('nama'),
                'kelas' => $this->request->getVar('kelas'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'alamat' => $this->request->getVar('alamat'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'agama' => $this->request->getVar('agama'),
            ];
    
            // Debug: Print data before saving
            var_dump($dataToInsert);
    
            $siswaModel->save($dataToInsert);
    
            return redirect()->to('/siswa/data-siswa');
        } catch (\Exception $e) {
            die($e->getMessage()); // Debug: Display the error message
        }
    }
}
