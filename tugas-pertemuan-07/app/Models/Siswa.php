<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nis', 'nama', 'kelas', 'tgl_lahir', 'tempat_lahir', 'alamat', 'jenis_kelamin', 'agama'];

}
