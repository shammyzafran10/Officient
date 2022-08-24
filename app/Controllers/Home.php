<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
             'title' => 'Home',
             'isi'   => 'v_home',
        ];
        echo view('layout/v_wrapper',$data);
    }

    public function absensi()
    {
        $data=[
            'title' => 'Absensi',
            'isi'   => 'absensi',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function data()
    {
        $data=[
            'title' => 'Data ',
            'isi'   => 'data',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function izin()
    {
        $data=[
            'title' => 'Izin ',
            'isi'   => 'izin',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function laporan()
    {
        $data=[
            'title' => 'Laporan',
            'isi'   => 'laporan',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function pengumuman()
    {
        $data=[
            'title' => 'Pengumuman',
            'isi'   => 'pengumuman',
       ];
       echo view('layout/v_wrapper',$data);
    }
}
