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
        return view('admin/training/index', $data);
    }
    public function generate()
    {
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->findAll();

        $groupedData = [];
        $kecList = [];
        foreach ($data['model'] as $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $kepadatan_penduduk = $value['kepadatan_penduduk'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = array_fill(2010, 9, 0);
            }
            $tahun = (int)$value['tahun'];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
            $groupedDataTahun[$kode_kecamatan][$tahun] = $tahun;;
            $meanY[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
            $meanX[$kode_kecamatan] =  array_sum($groupedDataTahun[$kode_kecamatan]) / count($groupedDataTahun[$kode_kecamatan]);
        }

        // Inisialisasi variabel untuk total Sigma


        foreach ($kecList as $key => $value) :
            $kode_kecamatan = $key;
            $totalSigmaXMean = 0;
            $totalSigmaXY = 0;
            $totalSigmaKuadrat = 0;
            foreach ($groupedData[$kode_kecamatan] as $tahun => $kepadatan_penduduk) {
                // Hitung (x - mean X) dan (y - mean Y)
                $diffXMean = $tahun - $meanX[$kode_kecamatan];
                $diffYMean = number_format($kepadatan_penduduk - $meanY[$kode_kecamatan], 3);
                print_r($diffXMean);
                exit;
                // Hitung (x - mean X) * (y - mean Y)
                $sigmaXY = $diffXMean * $diffYMean;

                $totalSigmaXMean += $diffXMean;
                $totalSigmaXY += $sigmaXY;
                $kuadrat = $diffXMean * $diffXMean;
                $diffXMean = $tahun - $meanX[$kode_kecamatan];
                $kuadrat = pow($diffXMean, 2);
                $totalSigmaKuadrat += $kuadrat;
                $slope = $totalSigmaXY / $totalSigmaKuadrat;
                $intercept = $meanY[$kode_kecamatan] - ($slope * $meanX[$kode_kecamatan]);
                $regresi = (number_format($slope, 3)) . 'x ' . (number_format($intercept, 3, '.', ','));

                $dataSave = [
                    'kode_kecamatan' => $kode_kecamatan,
                    'y' => $regresi,
                    'm' => (number_format($slope, 3)),
                    'b' => (number_format($intercept, 3, '.', ',')),
                ];
                $berhasil = $this->modelKecamatan->save($dataSave);
            }
        endforeach;

        if ($berhasil) {
            session()->setFlashdata("berhasil", "Bagi Data Berhasil Digenerate");
            return redirect()->to(base_url('/admin/training'));
        } else {
            session()->setFlashdata("gagal", "Bagi Data Gagal Digenerate");
            return redirect()->to(base_url('/admin/training'));
        }
    }
}