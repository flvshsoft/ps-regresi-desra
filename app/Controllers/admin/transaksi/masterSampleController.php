<?php

namespace App\Controllers\admin\transaksi;

class masterSampleController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'PENGELUARAN BARANG SAMPLE';
        return view('admin/transaksi/master_sample/index', $data);
    }
    public function tambah(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'TRANSASCT PENGELUARAN STOCK SAMPLE';
        return view('admin/transaksi/master_sample/tambah', $data);
    }
}