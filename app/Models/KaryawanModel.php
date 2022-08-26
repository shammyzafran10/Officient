<?php

namespace App\Models;
use CodeIgniter\Model;

class KaryawanModel extends Model
{
    public function get_karyawan()
    {
        return $this->db->table('karyawan')

        ->get()->getResultArray();
    }

    public function insert_karyawan($data)
    {
        return $this->db->table('karyawan')->insert($data);
    }

}