<?php

namespace App\Controllers\admin\piutang;

class kreditController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT PIUTANG USAHA';
        return view('admin/piutang_usaha/kredit/index', $data);
    }

    public function detail_input_piutang_kredit(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT PELUNASAN HUTANG TUNAI';
        return view('admin/piutang_usaha/kredit/tambah', $data);
    }

}