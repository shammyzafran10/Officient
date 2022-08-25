<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Laporan_pekerjaanModels;

class Laporan extends BaseController
{
    protected $LaporanModels;

    public function __construct()
    {
        $this->LaporanModels = new Laporan_pekerjaanModels();
    }

    public function Laporan()
    {
        $data = [
            'title' => 'List Data Laporan',
            'Laporan' => $this->LaporanModels->get_laporan(),
            'isi'   => 'Laporan_pekerjaan/v_Laporan_pekerjaan',
        ];
        echo view('layout/v_wrapper', $data);
    }
}
