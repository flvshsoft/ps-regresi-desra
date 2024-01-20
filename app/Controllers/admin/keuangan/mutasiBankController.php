<?php

namespace App\Controllers\admin\keuangan;

class mutasiBankController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'DATA MUTASI BANK';
        return view('admin/keuangan/mutasi_bank/index', $data);
    }
    public function edit(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'DETAIL PEMBAYARAN HUTANG USAHA';
        return view('admin/keuangan/mutasi_bank/edit', $data);
    }
}