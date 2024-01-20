<?php

namespace App\Controllers\admin_kas_kecil\master;

class areaController extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Bintang';
        $data['judul1'] = 'Master Area Penjualan';
        $data['model'] = $this->mdArea->findAll();
        return view('admin_kas_kecil/master/area/index', $data);
    }

    public function input()
    {
        $data = [
            // 'id_area' => $this->request->getPost('id_area'),
            'id_nama_area' => $this->request->getPost('id_nama_area'),
            'nama_area' => $this->request->getPost('nama_area'),
        ];

        $this->mdArea->insert($data);
        return redirect()->to(base_url('/akk/master_area'));
    }

    public function hapus($id_area)
    {
        $delete = $this->mdArea->delete($id_area);
        if ($delete) {
            return redirect()->to(base_url('/akk/master_area'));
        } else {
            echo 'Gagal menghapus data.';
        }
    }
}
