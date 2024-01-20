<?php

namespace App\Controllers\admin;

class penjualanController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Penjualan';
        return view('admin/penjualan/index', $data);
    }

    public function index2(): string
    {
        $data['judul'] = 'Penjualan';
        return view('admin/penjualan/index2', $data);
    }
}