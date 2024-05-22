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
        $data['judul'] = 'Single Exponential Smoothing';
        $data['judul1'] = 'User Testing';
        $data['model'] = $this->modelKecamatan
            ->findAll();
        $data['riwayat'] = $this->modelRiwayat
            ->join('kecamatan', 'kecamatan.kode_kecamatan=riwayat.kode_kecamatan')
            ->where('DATE(riwayat.created_at)', date('Y-m-d'))
            ->findAll();
        return view('admin/user_testing/ses', $data);
    }

    public function generate_ses()
    {
        $input_tahun = $this->request->getPost('input_tahun');
        $kode_kecamatan = $this->request->getPost('kode_kecamatan');
        $data = [
            'input_tahun' => $input_tahun,
            'kode_kecamatan' => $kode_kecamatan,
        ];
        print_r($data);

        $modelPenduduk = $this->modelPenduduk
            // ->join('kecamatan', 'kecamatan.kode_kecamatan=data_penduduk.kode_kecamatan')
            ->where('kode_kecamatan', $kode_kecamatan)
            ->orderBy('data_penduduk.tahun', 'ASC')
            ->groupBy('data_penduduk.tahun')
            ->find();

        $alpha = 0.2;

        foreach ($modelPenduduk as $key => $value) {

            $tahun = $value['tahun'];
            $kepadatan_penduduk = $value['kepadatan_penduduk'];

            if (isset($groupedDataTesting)) {
                if (count($groupedDataTesting) > 0) {
                    $nilai_ses_end = end($nilai_ses);
                    $testing = $nilai_ses_end;
                    $testing2 = ($alpha * $kepadatan_penduduk) + ((1 - $alpha) * $nilai_ses_end);
                    $nilai_ses[] = $testing2;
                } else {
                    $testing = $kepadatan_penduduk;
                    $nilai_ses = [$testing];
                }
            } else {
                $testing = $kepadatan_penduduk;
                $nilai_ses = [$testing];
            }

            $groupedDataTesting[$tahun] = number_format($testing, 3, ',', '.');
            print_r([
                $tahun,
                $kepadatan_penduduk,
                $groupedDataTesting[$tahun],
            ]);
        }

        
        // print_r($modelPenduduk);
    }
}
