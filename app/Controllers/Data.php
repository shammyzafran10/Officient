<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Data ',
            'isi'   => 'Karyawan/data',
       ];
       echo view('layout/v_wrapper',$data);
    }
    public function absensi()
    {
        $data=[
            'title' => 'Absensi',
            'isi'   => 'Karyawan/absensi',
       ];
       echo view('layout/v_wrapper',$data);
    }

    

    public function izin()
    {
        $data=[
            'title' => 'Izin ',
            'isi'   => 'Karyawan/izin',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function laporan()
    {
        $data=[
            'title' => 'Laporan',
            'isi'   => 'Karyawan/laporan',
       ];
       echo view('layout/v_wrapper',$data);
    }
}