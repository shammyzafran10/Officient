<?php

namespace App\Models;

use CodeIgniter\model;

class PerusahaanModels extends Model
{
    public function get_perusahaan()
    {
        return $this->db->table('perusahaan')->get()->getResultArray();
    }
}
