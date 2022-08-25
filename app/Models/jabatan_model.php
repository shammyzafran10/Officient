<?php

nameSpace App\Models;
use CodeIgniter\Model;

class jabatan_model extends Model
{
       public function get_jabatan()
       {
        return $this->db->table('jabatan')->get()->getResultArray();
       }

       public function insert_jabatan($data)
       {
              return $this->db->table('jabatan')->insert($data);
       }


}