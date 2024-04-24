<?php

namespace App\Models;

use CodeIgniter\Model;

class dataKecamatanModel extends Model
{
    protected $table = 'kecamatan';
    protected $primaryKey = 'kode_kecamatan';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['nama_kecamatan',  'y', 'm', 'b'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'deleted_at';
}