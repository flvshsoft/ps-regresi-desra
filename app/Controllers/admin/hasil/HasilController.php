<?php

namespace App\Controllers\admin\hasil;

class HasilController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Hasil';
        $data['model'] = $this->modelKecamatan
            ->findAll();
        return view('admin/hasil/index', $data);
    }
}