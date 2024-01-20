<?php

namespace App\Controllers\admin\keuangan;

class pengeluaranController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'DATA PENGELUARAN KANTOR';
        return view('admin/keuangan/pengeluaran/index', $data);
    }

    public function spending(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'FORM PENGELUARAN KANTOR';
        return view('admin/keuangan/pengeluaran/tambah', $data);
    }

    public function edit_spending(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'DETAIL PENGELUARAN KANTOR';
        return view('admin/keuangan/pengeluaran/edit', $data);
    }
}