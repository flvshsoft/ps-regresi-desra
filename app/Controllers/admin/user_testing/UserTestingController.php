<?php

namespace App\Controllers\admin\user_testing;

class UserTestingController extends BaseController
{
    public function regresi(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'User Testing';
        $data['model'] = $this->modelKecamatan
            ->findAll();
        $data['riwayat'] = $this->modelRiwayat
            ->join('kecamatan', 'kecamatan.kode_kecamatan=riwayat.kode_kecamatan')
            ->where('DATE(riwayat.created_at)', date('Y-m-d'))
            ->findAll();
        return view('admin/user_testing/regresi', $data);
    }

    public function tambah_regresi()
    {
        $id = $this->request->getVar('id');
        $data['regresi'] = $this->modelKecamatan
            ->where('kecamatan.kode_kecamatan', $id)
            ->find()[0];
        return $data['regresi']['y'] . ';' . $data['regresi']['m'] . ';' . $data['regresi']['b'];
    }

    public function tambah_regresi_save()
    {
        $regresi = $this->request->getPost('y');
        $slope = $this->request->getPost('m');
        $intercept = $this->request->getPost('b');
        $kode_kecamatan = $this->request->getPost('kode_kecamatan');
        $input_tahun = $this->request->getPost('input_tahun');

        $hasil =  ($slope * $input_tahun) + (1 * $intercept);

        $dataSave = [
            'kode_kecamatan' => $kode_kecamatan,
            'id_user' => Session('userData')['id_user'],
            'regresi' => $regresi,
            'intercept' => $intercept,
            'slope' => $slope,
            'hasil' => $hasil,
            'input_tahun' => $input_tahun,
        ];
        $berhasil = $this->modelRiwayat->save($dataSave);
        if ($berhasil) {
            session()->setFlashdata("berhasil", "Berhasil ");
            return redirect()->to(base_url('/admin/user_testing/regresi'));
        } else {
            session()->setFlashdata("gagal", "Gagal ");
            return redirect()->to(base_url('/admin/user_testing/regresi'));
        }
    }


    public function ses(): string
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['judul1'] = 'Testing & Mape';
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            // ->where('bagi_data', 'Testing')
            ->findAll();
        $data['alpha'] = 0.2;
        return view('admin/user_testing/ses', $data);
    }

    public function generate_ses()
    {
        $alpha = 0.2;
        $data['model'] = $this->modelPenduduk
            ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            // ->where('bagi_data', 'Testing')
            ->findAll();

        $groupedData = [];
        $kecList = [];
        foreach ($data['model'] as $key => $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $y[$kode_kecamatan] = $value['y'];
            $m[$kode_kecamatan] = $value['m'];
            $b[$kode_kecamatan] = $value['b'];

            $kepadatan_penduduk = $value['kepadatan_penduduk'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'] . '<br><br>' . $value['y'];
            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = array_fill(2010, 0, 0);
            }
            $tahun = (int) $value['tahun'];

            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
            if ($key == 0) {
                $testing = $kepadatan_penduduk;
                $nilai_ses = [$testing];
            } else {
                $nilai_ses_end = end($nilai_ses);
                $testing = $nilai_ses_end;
                $testing2 = ($alpha * $kepadatan_penduduk) + ((1 - $alpha) * $nilai_ses_end);
                $nilai_ses[] = $testing2;
            }

            $groupedDataTesting[$kode_kecamatan][$tahun] = number_format($testing, 3, ',', '.');
            if ($groupedData[$kode_kecamatan][$tahun] != 0) {
                $af = ($groupedData[$kode_kecamatan][$tahun] - $testing) / $groupedData[$kode_kecamatan][$tahun];
            } else {
                $af = 0;
            }

            $groupedDataAF[$kode_kecamatan][$tahun] = number_format($af, 3);
        }
        foreach ($kecList as $key => $value) :
            $kode_kecamatan = $key;
            foreach ($groupedData[$kode_kecamatan] as $tahun => $kepadatan_penduduk) {
                $kepadatan_penduduk;
            }
            foreach ($groupedDataTesting[$kode_kecamatan] as $tahun => $testing) {
                $testing;
                $prediksi = ($m[$kode_kecamatan] * 2024) - $b[$kode_kecamatan];
            }
            $sum_abs = 0;
            foreach ($groupedDataAF[$kode_kecamatan] as $tahun => $actual_forest) {
                $n = count($groupedDataAF[$kode_kecamatan]);
                $actual_forest;
                abs($actual_forest);
                $sum_abs += abs($actual_forest);
            }

            $satu_n = number_format(1 / $n, 3);
            $mape = number_format($satu_n * $sum_abs * 100, 3);
            // echo $mape;
            // exit;
            $dataSave = [
                'kode_kecamatan' => $kode_kecamatan,
                'mape_ses' => $mape,
            ];

            $berhasil = $this->modelKecamatan->save($dataSave);
        endforeach;

        if ($berhasil) {
            session()->setFlashdata("berhasil", "Mape Berhasil Digenerate");
            return redirect()->to(base_url('/admin/testing'));
        } else {
            session()->setFlashdata("gagal", "Mape Gagal Digenerate");
            return redirect()->to(base_url('/admin/testing'));
        }
    }
}