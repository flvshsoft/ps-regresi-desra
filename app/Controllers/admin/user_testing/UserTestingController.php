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
            ->where('hasil_ses', NULL)
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
        $data['judul'] = 'Single Exponential Smoothing';
        $data['judul1'] = 'User Testing';
        $data['model'] = $this->modelKecamatan
            ->findAll();
        $data['riwayat'] = $this->modelRiwayat
            ->join('kecamatan', 'kecamatan.kode_kecamatan=riwayat.kode_kecamatan')
            ->where('DATE(riwayat.created_at)', date('Y-m-d'))
            ->where('regresi', NULL)
            ->findAll();
        return view('admin/user_testing/ses', $data);
    }

    public function generate_ses()
    {
        $input_tahun = $this->request->getPost('input_tahun');
        $kode_kecamatan = $this->request->getPost('kode_kecamatan');

        $modelPenduduk = $this->modelPenduduk
            ->where('kode_kecamatan', $kode_kecamatan)
            ->orderBy('data_penduduk.tahun', 'ASC')
            ->groupBy('data_penduduk.tahun')
            ->find();

        $alpha = 0.2;
        $groupedData = [];
        $groupedDataTesting = [];
        $groupedDataAF = [];
        $nilai_ses_per_kecamatan = [];

        foreach ($modelPenduduk as $key => $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $kepadatan_penduduk = $value['kepadatan_penduduk'];

            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = [];
            }

            $tahun = (int) $value['tahun'];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);

            if (!isset($nilai_ses_per_kecamatan[$kode_kecamatan])) {
                $nilai_ses_per_kecamatan[$kode_kecamatan] = [];
            }

            if (isset($nilai_ses_per_kecamatan[$kode_kecamatan]) && count($nilai_ses_per_kecamatan[$kode_kecamatan]) > 0) {
                $nilai_ses_end = end($nilai_ses_per_kecamatan[$kode_kecamatan]);
                $testing = $nilai_ses_end;
                $testing2 = ($alpha * $kepadatan_penduduk) + ((1 - $alpha) * $nilai_ses_end);
                $nilai_ses_per_kecamatan[$kode_kecamatan][] = $testing2;
            } else {
                $testing = $kepadatan_penduduk;
                $nilai_ses_per_kecamatan[$kode_kecamatan][] = $testing;
            }

            $groupedDataTesting[$kode_kecamatan][$tahun] = number_format($testing, 3, ',', '.');

            if ($groupedData[$kode_kecamatan][$tahun] != 0) {
                $temp = (float) $groupedData[$kode_kecamatan][$tahun];
                $af = ($temp - (float) $testing) / $temp;
                $af = (float) $af;
            } else {
                $af = 0;
            }

            $groupedDataAF[$kode_kecamatan][$tahun] = number_format($af, 3);
        }

        $nilai_ses_end = end($nilai_ses_per_kecamatan[$kode_kecamatan]);
        $hasil_ses = ($alpha * $nilai_ses_end) + ((1 - $alpha) * $nilai_ses_end);
        $final = number_format($hasil_ses, 3, '.', '.');

        $dataSave = [
            'kode_kecamatan' => $kode_kecamatan,
            'id_user' => Session('userData')['id_user'],
            'input_tahun' => $input_tahun,
            'hasil_ses' => $final,
        ];
        $berhasil = $this->modelRiwayat->save($dataSave);
        if ($berhasil) {
            session()->setFlashdata("berhasil", "Berhasil ");
            return redirect()->to(base_url('/admin/user_testing/ses'));
        } else {
            session()->setFlashdata("gagal", "Gagal ");
            return redirect()->to(base_url('/admin/user_testing/ses'));
        }


        // print_r($modelPenduduk);
    }
}
