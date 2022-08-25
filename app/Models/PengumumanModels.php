<?php

namespace App\Models;

use CodeIgniter\model;

class PengumumanModels extends Model
{
    public function get_pengumuman()
    {
        return $this->db->table('pengumuman')->get()->getResultArray();
    }
}
