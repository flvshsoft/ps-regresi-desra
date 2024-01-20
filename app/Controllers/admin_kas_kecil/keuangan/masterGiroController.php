<?php

namespace App\Controllers\admin\keuangan;

class masterGiroController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'MASTER PENCAIRAN GIRO';
        return view('admin/keuangan/master_giro/index', $data);
    }
}