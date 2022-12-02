<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    
    protected $table      = 'surat';
    protected $primaryKey = 'idsurat';

    // protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = false;

    #protected $allowedFields = ['name', 'email'];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;
}
