<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table      = 'pengajuan';
    protected $primaryKey = 'idpengajuan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nim', 'nama', 'tempat tanggal lahir', 'kelas', 'semester', 'prodi', 'tahun akademik', 'diploma', 'status', 'kategori', 'tujuan'];

    #protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = true;
    protected $tanggalpengajuan  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;
}
