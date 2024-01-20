<?php

namespace App\Controllers\admin;

class konsumenController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin/konsumen/index', $data);
    }

    public function customer(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'Data Konsumen';
        return view('admin/konsumen/tambah', $data);
    }
}