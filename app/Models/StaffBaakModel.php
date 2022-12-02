<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffBaakModel extends Model
{
    protected $table      = 'staffbaak';
    protected $primaryKey = 'nip';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    // protected $allowedFields = ['nip', 'email'];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;
}
