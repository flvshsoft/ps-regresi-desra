<?php

namespace App\Controllers\admin\piutang;

class tunaiController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT PIUTANG USAHA';
        return view('admin/piutang_usaha/lunas/index', $data);
    }

    public function detail_input_piutang(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT PELUNASAN HUTANG TUNAI';
        return view('admin/piutang_usaha/lunas/tambah', $data);
    }

}