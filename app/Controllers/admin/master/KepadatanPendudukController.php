<?php

namespace App\Controllers\admin\master;

class KepadatanPendudukController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Kepadatan Penduduk';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();
        return view('admin/master/kepadatan_penduduk/index', $data);
    }

    public function tambah(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Kepadatan Penduduk';
        $data['model'] = $this->modelKecamatan->findAll();
        return view('admin/master/kepadatan_penduduk/tambah', $data);
    }
    public function tambah_proses()
    {
        $data = [
            'kode_kecamatan' => $this->request->getPost('kode_kecamatan'),
            'tahun' => $this->request->getPost('tahun'),
            'luas_wilayah' => $this->request->getPost('luas_wilayah'),
            'jumlah_penduduk' => $this->request->getPost('jumlah_penduduk'),
            'kepadatan_penduduk' => $this->request->getPost('kepadatan_penduduk'),
        ];

        $berhasil = $this->modelPenduduk->insert($data);
        if ($berhasil) {
            // tampilkan pesan 
            session()->setFlashdata('tambah', 'Kepadatan Penduduk Berhasil Ditambah.');
            // Redirect ke halaman Kepadatan Penduduk setelah berhasil menyisipkan data
            return redirect()->to(base_url('/admin/kepadatan_penduduk'));
        }
    }


    public function edit_proses()
    {
        $id_penduduk = $this->request->getPost('id_penduduk');
        $kode_kecamatan = $this->request->getPost('kode_kecamatan');
        $data = [
            'id_penduduk' => $id_penduduk,
            'kode_kecamatan' => $kode_kecamatan,
            'tahun' => $this->request->getPost('tahun'),
            'luas_wilayah' => $this->request->getPost('luas_wilayah'),
            'jumlah_penduduk' => $this->request->getPost('jumlah_penduduk'),
            'kepadatan_penduduk' => $this->request->getPost('kepadatan_penduduk'),
        ];
        $berhasil =  $this->modelPenduduk->save($data);
        if ($berhasil) {
            // tampilkan pesan jika berhasil diedit
            session()->setFlashdata('edit', '  Kepadatan Penduduk Berhasil Diedit');

            // Redirect kembali ke halaman tambah
            return redirect()->to(base_url('/admin/kepadatan_penduduk/'));
        }
    }
    public function edit($id_kecamatan)
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Kepadatan Penduduk';
        $data['kecamatan'] = $this->modelKecamatan->findAll();
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->where('id_penduduk', $id_kecamatan)
            ->find()[0];
        echo view('admin/master/kepadatan_penduduk/edit', $data);
    }

    public function hapus($id_kecamatan)
    {
        $hapus =  $this->modelPenduduk->delete($id_kecamatan);
        if ($hapus) {
            // tampilkan pesan jika berhasil dihapus
            session()->setFlashdata('hapus', '  Kepadatan Penduduk Berhasil Di Hapus');
            return redirect()->to(base_url('/admin/kepadatan_penduduk'));
        }
    }
}