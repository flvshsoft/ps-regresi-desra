<?php

namespace App\Controllers\admin\master;

class UserController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Data User';
        $data['model'] = $this->modelUser->findAll();
        return view('admin/master/data_user/index', $data);
    }

    public function tambah(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Data User';
        return view('admin/master/data_user/tambah', $data);
    }
    public function tambah_proses()
    {
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'username' => $this->request->getPost('username'),
            'level_user' => 'Admin',
            'status_user' => 1,
            'password' => $this->request->getPost('password'),
        ];
        $this->modelUser->insert($data);
        // print_r($data);
        // exit;
        return redirect()->to(base_url('/admin/data_user'));
    }

    public function edit_proses()
    {
        $id_user = $this->request->getPost('id_user');
        $data = [
            'id_user' => $id_user,
            'nama_user' => $this->request->getPost('nama_user'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'level_user' => 'Admin',
            'status_user' => 1,
        ];
        $berhasil =  $this->modelUser->save($data);
        if ($berhasil) {
            // tampilkan pesan jika berhasil diedit
            session()->setFlashdata('edit', '  user Berhasil Diedit');
            // Redirect kembali ke halaman tambah
            return redirect()->to(base_url('/admin/data_user/'));
        }
    }
    public function edit($id_user)
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Data User';
        $data['model'] = $this->modelUser
            ->where('id_user', $id_user)
            ->find()[0];
        echo view('admin/master/data_user/edit', $data);
    }

    public function hapus($id_user)
    {
        $hapus =  $this->modelUser->delete($id_user);
        if ($hapus) {
            // tampilkan pesan jika berhasil dihapus
            session()->setFlashdata('hapus', '  user Berhasil Di Hapus');
            return redirect()->to(base_url('/admin/data_user'));
        }
    }
}
