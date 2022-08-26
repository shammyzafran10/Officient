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



    public function pengumuman()
    {
        $data=[
            'title' => 'Pengumuman',
            'isi'   => 'pengumuman',
       ];
       echo view('layout/v_wrapper',$data);
    }
}
