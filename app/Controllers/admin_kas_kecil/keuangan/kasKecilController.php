<?php

namespace App\Controllers\admin\keuangan;

class kasKecilController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'SALDO DASAR KAS KECIL';
        return view('admin/keuangan/kas_kecil/index', $data);
    }

}