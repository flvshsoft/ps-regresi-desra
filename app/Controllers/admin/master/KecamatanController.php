<?php

namespace App\Controllers\admin\master;

class KecamatanController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Data Kecamatan';
        $data['model'] = $this->modelKecamatan->findAll();
        return view('admin/master/data_kecamatan/index', $data);
    }

    public function tambah(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Data Kecamatan';
        return view('admin/master/data_kecamatan/tambah', $data);
    }
    public function tambah_proses()
    {
        $kode_kecamatan = $this->request->getPost('kode_kecamatan');
        $data = [
            'nama_kecamatan' => $this->request->getPost('nama_kecamatan'),
            'kode_kecamatan' => $kode_kecamatan,
        ];

        // Periksa apakah kode kecamatan sudah ada dalam database
        $existingData = $this->modelKecamatan->where('kode_kecamatan', $kode_kecamatan)->first();
        if ($existingData) {
            // Kode kecamatan sudah ada, tampilkan pesan kesalahan
            session()->setFlashdata('error', 'Maaf, Kode Kecamatan Sudah Ada.');

            // Redirect kembali ke halaman tambah
            return redirect()->to(base_url('/admin/data_kecamatan/tambah/#kodeKecamatansudahada'));
        } else {
            $this->modelKecamatan->insert($data);
            session()->setFlashdata('tambah', ' Kode Kecamatan Berhasil Ditambah');

            // Redirect ke halaman data kecamatan setelah berhasil menyisipkan data
            return redirect()->to(base_url('/admin/data_kecamatan'));
        }
    }

    public function edit_proses()
    {
        $kode_kecamatan = $this->request->getPost('kode_kecamatan');
        $data = [
            'kode_kecamatan' => $kode_kecamatan,
            'nama_kecamatan' => $this->request->getPost('nama_kecamatan'),
        ];
        $berhasil =  $this->modelKecamatan->save($data);
        if ($berhasil) {
            // tampilkan pesan jika berhasil diedit
            session()->setFlashdata('edit', '  Kecamatan Berhasil Diedit');

            // Redirect kembali ke halaman tambah
            return redirect()->to(base_url('/admin/data_kecamatan/'));
        }
    }
    public function edit($id_kecamatan)
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Data Kecamatan';
        $data['model'] = $this->modelKecamatan
            ->where('kode_kecamatan', $id_kecamatan)
            ->find()[0];
        echo view('admin/master/data_kecamatan/edit', $data);
    }

    public function hapus($id_kecamatan)
    {
        $hapus =  $this->modelKecamatan->delete($id_kecamatan);
        if ($hapus) {
            // tampilkan pesan jika berhasil dihapus
            session()->setFlashdata('hapus', '  Kecamatan Berhasil Di Hapus');
            return redirect()->to(base_url('/admin/data_kecamatan'));
        }
    }
}
