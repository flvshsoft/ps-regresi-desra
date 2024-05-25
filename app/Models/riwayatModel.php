<?php

namespace App\Models;

use CodeIgniter\Model;

class riwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'id_riwayat';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['kode_kecamatan',  'input_tahun', 'hasil', 'slope', 'intercept', 'regresi', 'id_user', 'hasil_ses'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'deleted_at';
}
