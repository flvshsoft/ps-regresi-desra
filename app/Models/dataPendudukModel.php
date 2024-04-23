<?php

namespace App\Models;

use CodeIgniter\Model;

class dataPendudukModel extends Model
{
    protected $table = 'data_penduduk';
    protected $primaryKey = 'id_penduduk';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['kode_kecamatan',  'tahun', 'luas_wilayah', 'jumlah_penduduk', 'kepadatan_penduduk', 'bagi_data'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'deleted_at';
}
