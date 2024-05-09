<?php

namespace App\Controllers\admin;

class keuanganController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin/keuangan/index', $data);
    }
}