<?php

namespace App\Models;

use CodeIgniter\model;

class Laporan_pekerjaanModels extends Model
{
    public function get_laporan_pekerjaan()
    {
        return $this->db->table('laporan_pekerjaan')->get()->getResultArray();
    }
}
