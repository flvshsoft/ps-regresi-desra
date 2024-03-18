<?php

namespace App\Models;

use CodeIgniter\Model;

class dataPendudukModel extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id_penduduk';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['nama_penduduk',  ''];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'deleted_at';
}