<?php

namespace App\Controllers\admin\bagi_data;

class BagiDataController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Bagi Data';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();
        return view('admin/bagi_data/index', $data);
    }
    public function generate()
    {
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();

        $groupedData = [];
        $kecList = [];
        $kecIdList = [];
        $jumlah_penduduk = [];
        $rata_rata_kepadatan = [];
        foreach ($data['model'] as $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
            $jumlah_penduduk[$kode_kecamatan] = $value['jumlah_penduduk'];
            $luas_wilayah[$kode_kecamatan] = $value['luas_wilayah'];
            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = array_fill(2010, 14, 0);
            }
            $tahun = (int)$value['tahun'];
            $kepadatan = $jumlah_penduduk[$kode_kecamatan] / $luas_wilayah[$kode_kecamatan];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan, 3);
            $rata_rata_kepadatan[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
            $kecIdList[$kode_kecamatan][$tahun] = $value['id_penduduk'];
        }
        // bagi data
        $bagi_presen = 70 / 100;
        foreach ($groupedData as $kode_kecamatan => $tahun_data) {
            $no = 1;
            foreach ($tahun_data as $key => $kepadatan_penduduk) {
                if (isset($kecIdList[$kode_kecamatan][$key])) {
                    $total = count($tahun_data);
                    if ($no <= ($bagi_presen * $total)) {
                        $bagi_data = 'Training';
                    } else {
                        $bagi_data = 'Testing';
                    }
                    $dataSave = [
                        'id_penduduk' => $kecIdList[$kode_kecamatan][$key],
                        'bagi_data' => $bagi_data,
                    ];
                    $berhasil =  $this->modelPenduduk->save($dataSave);
                    $no++;
                }
            }
        }
        if ($berhasil) {
            session()->setFlashdata("berhasil", "Bagi Data Berhasil Digenerate");
            return redirect()->to(base_url('/admin/bagi_data'));
        } else {
            session()->setFlashdata("gagal", "Bagi Data Gagal Digenerate");
            return redirect()->to(base_url('/admin/bagi_data'));
        }
    }

    public function training(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Training';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();
        return view('admin/bagi_data/training', $data);
    }
}
