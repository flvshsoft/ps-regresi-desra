<?php

namespace App\Controllers\admin\transaksi;

class closingSalesController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT TAGIHAN BARU';
        return view('admin/transaksi/closing_sales/index', $data);
    }
    public function master_closing(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'RIWAYAT CLOSING PENJUALAN SALES';
        return view('admin/transaksi/closing_sales/master_closing', $data);
    }
    public function detail_closing(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'DETAIL TUTUP PENJUALAN BARANG';
        return view('admin/transaksi/closing_sales/detail_closing', $data);
    }
}