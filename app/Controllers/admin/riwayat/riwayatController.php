<?php

namespace App\Controllers\admin\riwayat;

class riwayatController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Riwayat';
        $data['model'] = $this->modelRiwayat
            ->select(['*', 'riwayat.created_at as created_at'])
            ->join('kecamatan', 'kecamatan.kode_kecamatan=riwayat.kode_kecamatan')
            ->findAll();
        return view('admin/riwayat/index', $data);
    }
}
