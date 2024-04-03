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
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan, 3);
            $rata_rata_kepadatan[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
            $kecIdList[$kode_kecamatan][$tahun] = $value['id_penduduk'];
        }
        // print_r($groupedData);
        // exit;


        foreach ($groupedData as $kode_kecamatan => $tahun_data) {
            foreach ($tahun_data as $key => $kepadatan_penduduk) {
                if (isset($kecIdList[$kode_kecamatan][$key])) {
                    // echo $kepadatan_penduduk;
                    // echo ' - ';
                    // echo $kecIdList[$kode_kecamatan][$key];

                    $dataSave = [
                        'id_penduduk' => $kecIdList[$kode_kecamatan][$key],
                        'kepadatan_penduduk' => (float)$kepadatan_penduduk,
                    ];
                    // print_r($dataSave);
                    // exit;
                    $berhasil =  $this->modelPenduduk->save($dataSave);
                }
                // echo '<br>';
            }
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
                    // print_r(
                    //     [
                    //         $no,
                    //         $key,
                    //         $total,
                    //         $bagi_data,
                    //         $bagi_presen,
                    //     ]
                    // );

                    $dataSave = [
                        'id_penduduk' => $kecIdList[$kode_kecamatan][$key],
                        'bagi_data' => $bagi_data,
                    ];
                    // print_r($dataSave);
                    // exit;
                    $berhasil =  $this->modelPenduduk->save($dataSave);
                    $no++;
                    // echo '<br>';
                }
            }
        }

        // exit;
        return view('admin/mean/index', $data);
    }
}
