<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    
   public function getdata(){
    $query = $this->db->query("SELECT * FROM pengajuan");
    return $query->getResult();
   }
}
