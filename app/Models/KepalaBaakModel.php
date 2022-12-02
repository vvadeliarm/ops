<?php

namespace App\Models;

use CodeIgniter\Model;

class KepalaBaakModel extends Model
{
    protected $table      = 'kbaak';
    protected $primaryKey = 'nip';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    #protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'tanggalpembuatan';
    protected $updatedField  = 'tanggalacckbaak';
    // protected $deletedField  = 'deleted_at';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;

    // function cari($keyword)
    // {
    //     // dd($this->pengajuanModel->table('pengajuan'));
    //     $builder = $this->db->query("SELECT * FROM pengajuan WHERE nama Like '%$keyword%'")->getResult();
    //     // $builder->like('nama', $keyword);
    //     return $builder;
    // }
}
