<?php
namespace App\Controllers\admin_kas_kecil;

//require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class sdmController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        return view('admin_kas_kecil/sdm/index', $data);
    }

    public function master_cuti(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'WAITING LIST APPROVAL CUTI';
        return view('admin_kas_kecil/sdm/master_cuti/index', $data);
    }

    public function master_riwayat_cuti(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LOG CUTI KARYAWAN';
        return view('admin_kas_kecil/sdm/master_cuti/master_riwayat_cuti/index', $data);
    }

    public function master_izin(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'WAITING LIST APPROVAL WORK OFF PERMISSION';
        return view('admin_kas_kecil/sdm/master_izin/index', $data);
    }

    public function master_riwayat_izin(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LOG IZIN KARYAWAN';
        return view('admin_kas_kecil/sdm/master_izin/master_riwayat_izin/index', $data);
    }

    public function master_employee(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'MASTER DATA KARYAWAN';
        return view('admin_kas_kecil/sdm/master_employee/index', $data);
    }

    public function general(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INFORMATION EMPLOYEE';
        return view('admin_kas_kecil/sdm/master_employee/tambah', $data);
    }

    public function edit_general(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INFORMATION EMPLOYEE';
        return view('admin_kas_kecil/sdm/master_employee/edit', $data);
    }

    public function report_data_karyawan(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INFORMATION EMPLOYEE';
        return view('admin_kas_kecil/sdm/master_employee/pdf', $data);
    }

    public function export_data_karyawan(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INFORMATION EMPLOYEE';
        $dataKaryawan = [
            ['Nama', 'Jabatan', 'Gaji'],
            ['John Doe', 'Manager', '5000'],
            ['Jane Doe', 'Staff', '3000'],
            // ... tambahkan data karyawan lainnya
        ];

        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Ambil active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Masukkan data ke dalam sheet
        $sheet->fromArray($dataKaryawan, null, 'A1');

        // Buat objek writer
        $writer = new Xlsx($spreadsheet);
        
        // Set nama file
        $filename = 'export_data_karyawan.xlsx';

        // Set header untuk download file Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Tulis file Excel ke output buffer
        $writer->save('php://output');

        exit();    
    }
    public function master_absen_gaji(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'REKAP DATA ABSENSI KARYAWAN';
        return view('admin_kas_kecil/sdm/master_absen_gaji/index', $data);
    }

    public function master_perbaikan_absen(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'PERBAIKAN ABSEN';
        return view('admin_kas_kecil/sdm/master_absen_gaji/master_perbaikan_absen/index', $data);
    }

    public function form_absensi(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'CETAK ABSENSI KARYAWAN';
        return view('admin_kas_kecil/sdm/master_absen_gaji/cetak_absensi/index', $data);
    }

    public function master_absen(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'DATA LOG ABSENSI KARYAWAN';
        return view('admin_kas_kecil/sdm/master_absen/index', $data);
    }
    
}