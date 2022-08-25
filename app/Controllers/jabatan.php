<?php

namespace App\Controllers;
use CodeIgniter\Controler;
use App\Models\jabatan_model;

class jabatan extends BaseController
{

    protected $jabatan_model;
    public function __construct()
    {
        $this->jabatan_model = New jabatan_model();
    }


    public function index()
    {
        $data=[
             'title' => 'jabatan',
             'jabatan' => $this->jabatan_model->get_jabatan(),
             'isi'   => 'jabatan/v_jabatan',
        ];
        echo view('layout/v_wrapper',$data);
    }

    public function tambah()
    {
        $data=[
            'title' => 'tambah',          
            'isi'   => 'jabatan/v_tambah',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function simpan()
    {
        $data=[
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
            'nominal_gaji' =>  $this->request->getPost('nominal_gaji'),
        ];
        $this->jabatan_model->insert_jabatan($data);
        session()->setFlashData('success','DATA BERHASIL DI TAMBAH');
        return redirect()->to(base_url('jabatan'));
    }
}