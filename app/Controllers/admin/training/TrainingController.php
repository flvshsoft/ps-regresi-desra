<?php

namespace App\Controllers\admin\training;

class TrainingController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Training Data';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->where('bagi_data', 'Training')
            ->findAll();

        print_r($data['model']);
        exit;
        return view('admin/training/index', $data);
    }
    public function generate()
    {
        $data['model'] = $this->modelPenduduk
            ->where('bagi_data', 'Training')
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();

        $groupedData = [];
        $kecList = [];
        foreach ($data['model'] as $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $kepadatan_penduduk = $value['kepadatan_penduduk'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = array_fill(2010, 10, 0);
            }
            $tahun = (int) $value['tahun'];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
            $groupedDataTahun[$kode_kecamatan][$tahun] = $tahun;
            $meanY[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
            $meanX[$kode_kecamatan] =  array_sum($groupedDataTahun[$kode_kecamatan]) / count($groupedDataTahun[$kode_kecamatan]);
        }

        foreach ($kecList as $key => $value) :
            $kode_kecamatan = $key;
            $totalSigmaXMean = 0;
            $totalSigmaXY = 0;
            $totalSigmaKuadrat = 0;
            foreach ($groupedData[$kode_kecamatan] as $tahun => $kepadatan_penduduk) {
                $kepadatan_penduduk;
                $tahun;
                $meanX[$kode_kecamatan];
                $meanY[$kode_kecamatan];

                $diffXMean = $tahun - $meanX[$kode_kecamatan];
                $diffYMean = number_format($kepadatan_penduduk - $meanY[$kode_kecamatan], 3);

                $sigmaXY = $diffXMean * $diffYMean;

                $totalSigmaXMean += $diffXMean;
                $totalSigmaXY += $sigmaXY;
                $kuadrat = $diffXMean * $diffXMean;
                $diffXMean = $tahun - $meanX[$kode_kecamatan];
                $kuadrat = pow($diffXMean, 2);
                $totalSigmaKuadrat += $kuadrat;
                $slope = $totalSigmaXY / $totalSigmaKuadrat;
                $m = (string) number_format($slope, 3);
                $intercept = $meanY[$kode_kecamatan] - ($m * $meanX[$kode_kecamatan]);
                $regresi = (number_format($m, 3)) . 'x ' . (number_format($intercept, 3, '.', ','));
                $b = number_format($intercept, 3);
                $b = str_replace(',', '', $b);
                $y = number_format($m, 3);
                $y = str_replace(',', '', $y);
                $dataSave = [
                    'kode_kecamatan' => $kode_kecamatan,
                    'y' => $regresi,
                    'm' => $y,
                    'b' => $b,
                ];
                // print_r($dataSave);
                // exit;
                $berhasil = $this->modelKecamatan->save($dataSave);
            }

        endforeach;
        // }

        if ($berhasil) {
            session()->setFlashdata("berhasil", "Persamaan Regresi Linear Berhasil Digenerate");
            return redirect()->to(base_url('/admin/training'));
        } else {
            session()->setFlashdata("gagal", "Persamaan Regresi Linear Gagal Digenerate");
            return redirect()->to(base_url('/admin/training'));
        }
    }
}
