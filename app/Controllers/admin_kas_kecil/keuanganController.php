<?php

namespace App\Controllers\admin_kas_kecil;

class keuanganController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin_kas_kecil/keuangan/index', $data);
    }
}
