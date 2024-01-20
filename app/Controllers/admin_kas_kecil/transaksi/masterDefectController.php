<?php

namespace App\Controllers\admin\transaksi;

class masterDefectController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] =  'PENGELUARAN BARANG DEFECT';
        return view('admin/transaksi/master_defect/index', $data);
    }

    public function tambah(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] =  'TRANSASCT PENGELUARAN STOCK DEFECT';
        return view('admin/transaksi/master_defect/tambah', $data);
    }
}
