<?php

namespace App\Controllers;
use CodeIgnite\Controller;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    protected $DataModel;

    public function __construct()
    {
        $this->KaryawanModel = new KaryawanModel();
    }

    public function index()
    {
        $data=[
            'title' => 'Data ',
            'karyawan'  => $this->KaryawanModel->get_karyawan(),
            'isi'   => 'Karyawan/index',
       ];
       echo view('layout/v_wrapper',$data);
    }

    public function tambah()
    {
        $data=[
            'title' => 'Tambah Data Karyawan ',
            'karyawan'  => $this->KaryawanModel->get_karyawan(),
            'isi'   => 'Karyawan/tambah',
       ];
       echo view('layout/v_wrapper',$data);
    }


    public function simpan()
    {
        $data=[
            'id_jabatan' => $this->request->getVar('id_jabatan') ,
            'id_status' => $this->request->getVar('id_status')  ,   
            'nik' => $this->request->getVar('nik')  ,   
            'nama_karyawan'  => $this->request->getVar('nama_karyawan')  ,
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin')   ,
            'alamat' => $this->request->getVar('alamat')   ,
            'no_hp' => $this->request->getVar('no_hp')  ,
            'email' => $this->request->getVar('email')  ,
            'jenjang_pendidikan' => $this->request->getVar('jenjang_pendidikan')   ,
            'no_rek'  => $this->request->getVar('no_rek') ,
            'foto' => $this->request->getVar('foto')  ,
       ];
       $this->KaryawanModel->insert_karyawan($data);
       session()->setFlashData('success','Data Berhasil Di Tambah Kan');
       return redirect()->to(base_url('/Data-Karyawan'));
    }

    public function edit($id_karyawan)
    {
        $data=[
            'title' => 'Edit Data Karyawan ',
            'isi'   => 'Karyawan/edit',
       ];
       echo view('layout/v_wrapper',$data);
    }

}