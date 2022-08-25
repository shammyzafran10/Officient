<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PengumumanModels;

class Pengumuman extends BaseController
{
    protected $PengumumanModels;

    public function __construct()
    {
        $this->PengumumanModels = new PengumumanModels();
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'pengumuman',
            'pengumuman' => $this->PengumumanModels->get_pengumuman(),
            'isi'   => 'pengumuman/v_pengumuman',
        ];
        echo view('layout/v_wrapper', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'tambah data pengumuman',
            'isi'   => 'pengumuman/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }
}
