<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PerusahaanModels;

class Perusahaan extends BaseController
{
    protected $perusahaanModels;

    public function __construct()
    {
        $this->perusahaanModels = new PerusahaanModels();
    }

    public function perusahaan()
    {
        $data = [
            'title' => 'List Data Perusahaan',
            'perusahaan' => $this->perusahaanModels->get_perusahaan(),
            'isi'   => 'perusahaan/v_perusahaan',
        ];
        echo view('layout/v_wrapper', $data);
    }
}
