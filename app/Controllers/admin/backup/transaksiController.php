<?php

namespace App\Controllers\admin;

class transaksiController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin/transaksi/index', $data);
    }

    public function closing_sales(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin/transaksi/index', $data);
    }
    public function master_defect(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin/transaksi/index', $data);
    }
    public function master_sample(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin/transaksi/index', $data);
    }
}