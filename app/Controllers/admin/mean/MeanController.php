<?php

namespace App\Controllers\admin\mean;

class MeanController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Mean Proses';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();
        return view('admin/mean/index', $data);
    }
}