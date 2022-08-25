<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'isi'   => 'v_home',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function absensi()
    {
        $data = [
            'title' => 'Absensi',
            'isi'   => 'absensi',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function data()
    {
        $data = [
            'title' => 'Data ',
            'isi'   => 'data',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function izin()
    {
        $data = [
            'title' => 'Izin ',
            'isi'   => 'izin',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan',
            'isi'   => 'laporan_pekerjaan/v_laporan_pekerjaan',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Pengumuman',
            'isi'   => 'pengumuman/v_pengumuman',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function perusahaan()
    {
        $data = [
            'title' => 'Perusahaan',
            'isi'   => 'perusahaan/v_perusahaan',
        ];
        echo view('layout/v_wrapper', $data);
    }
}
