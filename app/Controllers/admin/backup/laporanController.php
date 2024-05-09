<?php

namespace App\Controllers\admin;

class laporanController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'Bintang Distributor';
        return view('admin/laporan/index', $data);
    }

    public function form_cost_ratio(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'COST & RATIO';
        return view('admin/laporan/form_cost_ratio', $data);
    }

    public function form_report_assets(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'REPORT ASSETS';
        return view('admin/laporan/form_report_assets', $data);
    }

    public function form_closing(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'CLOSING';
        return view('admin/laporan/form_closing', $data);
    }

    public function deposit(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LAPORAN KAS KECIL';
        return view('admin/laporan/deposit', $data);
    }

    public function form_kas_kecil(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LAPORAN KAS KECIL';
        return view('admin/laporan/form_kas_kecil', $data);
    }

    public function form_tertagih(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LAPORAN NOTA TERTAGIH';
        return view('admin/laporan/form_tertagih', $data);
    }

    public function form_cetak_labarugi(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'CETAK  BUKTI PELUNASAN PIUTANG USAHA';
        return view('admin/laporan/form_cetak_labarugi', $data);
    }

    public function form_sisa(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LAPORAN TAGIHAN PIUTANG USAHA';
        return view('admin/laporan/form_sisa', $data);
    }

    public function form_report_sales(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LAPORAN OMSET PENJUALAN';
        return view('admin/laporan/form_report_sales', $data);
    }
    public function form_print_pengeluaran(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'LAPORAN PENGELUARAN';
        return view('admin/laporan/form_print_pengeluaran', $data);
    }
}
