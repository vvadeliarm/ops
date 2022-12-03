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
    protected $allowedFields = [
        'nama', 'nim', 'kelas', 'prodi', 'semester', 'tempattanggallahir',
        'diploma', 'tahunakademik', 'status', 'kategori', 'tujuan', 'statusskm',
        'fileupload', 'namafile', 'alasan', 'nipoperator', 'namaoperator', 'tanggalcekoperator',
        'tanggalacckbaak', 'nipkbaak', 'namakbaak'
    ];
    //

    #protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = true;
    protected $createdField = 'tanggalpengajuan';
    protected $updatedField  = 'tanggalcekoperator';
    // protected $deletedField  = 'tanggal hapus';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;
    function cari($keyword)
    {
        // dd($this->pengajuanModel->table('pengajuan'));
        $builder = $this->db->query("SELECT * FROM pengajuan WHERE nama Like '%$keyword%' OR nim Like '%$keyword%'")->getResultArray();
        // dd($builder);
        return $builder;
    }
}
