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
    protected $allowedFields = ['nama', 'nim', 'kelas', 'prodi', 'semester', 'tempattanggallahir', 'diploma', 'tahunakademik', 'status', 'kategori', 'tujuan', 'statusskm', 'fileupload', 'namafile', 'alasan'];
    //

    #protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = true;
    protected $createdField = 'tanggalpengajuan';
    protected $updatedField  = 'tanggalperbaikan';
    // protected $deletedField  = 'tanggal hapus';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;

    // public function __construct()
    // {
    //     $this->pengajuanModel = new PengajuanModel();
    //     // $this->mahasiswaModel = new MahasiswaModel();
    //     // $this->suratModel = new SuratModel();
    // }

    // function cari($keyword)
    // {
    //     // dd($this->pengajuanModel->table('pengajuan'));
    //     $builder = $this->db->query("SELECT * FROM pengajuan WHERE nama Like '%$keyword%'")->getResult();
    //     // $builder->like('nama', $keyword);
    //     return $builder;

    function cari($keyword)
    {
        // dd($this->pengajuanModel->table('pengajuan'));
        $builder = $this->db->query("SELECT * FROM pengajuan WHERE nama Like '%$keyword%'")->getResultArray();
        // dd($builder);
        return $builder;
    }
}
