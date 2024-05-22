<?php

namespace App\Controllers\admin\mean;

class MeanController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Mean Proses';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();
        // exit;
        return view('admin/mean/index', $data);
    }

    public function generate()
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Mean Proses';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();

        // generate
        $groupedData = [];
        $kecList = [];
        $kecIdList = [];
        $jumlah_penduduk = [];
        $luas_kecamatan = [];
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
            // print_r([$kode_kecamatan, $tahun, $jumlah_penduduk[$kode_kecamatan], (float)$luas_wilayah[$kode_kecamatan]]);
            // if ($kode_kecamatan == "14.06.13") {
            $kepadatan_format = number_format($kepadatan, 3);
            $kepadatan_format = str_replace(',', '', $kepadatan_format);
            // echo $kepadatan_format;
            // echo '<br>';
            //     exit;
            // }
            $groupedData[$kode_kecamatan][$tahun] = $kepadatan_format;
            $rata_rata_kepadatan[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
            $kecIdList[$kode_kecamatan][$tahun] = $value['id_penduduk'];
        }
        // exit;

        foreach ($groupedData as $kode_kecamatan => $tahun_data) {
            foreach ($tahun_data as $key => $kepadatan_penduduk) {
                if (isset($kecIdList[$kode_kecamatan][$key])) {
                    $dataSave = [
                        'id_penduduk' => $kecIdList[$kode_kecamatan][$key],
                        'kepadatan_penduduk' => $kepadatan_penduduk,
                    ];
                    print_r($dataSave);
                    $berhasil =  $this->modelPenduduk->save($dataSave);
                }
            }
        }
        // exit;
        if ($berhasil) {
            session()->setFlashdata("berhasil", "Mean Berhasil Digenerate");
            return redirect()->to(base_url('/admin/mean'));
        } else {
            session()->setFlashdata("gagal", "Mean Gagal Digenerate");
            return redirect()->to(base_url('/admin/mean'));
        }
    }
}
