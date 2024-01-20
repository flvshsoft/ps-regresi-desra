<?php

namespace App\Controllers\admin_kas_kecil\piutang;

class kreditController extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT PIUTANG USAHA';
        $data['model'] = $this->mdSales
            ->join('partner', 'partner.id_partner=sales.id_partner')
            ->join('nota', 'nota.id_sales=sales.id_sales')
            ->join('area', 'area.id_area=nota.id_area')
            // ->where('payment_method', 'KREDIT')
            ->findAll();
        return view('admin_kas_kecil/piutang_usaha/kredit/index', $data);
    }

    public function detail_input_piutang_kredit($id_sales): string
    {
        $data['judul'] = 'Bintang Distributor';
        $data['judul1'] = 'INPUT PELUNASAN HUTANG TUNAI';
        $data['info'] = $this->mdSalesDetail
            ->join('sales', 'sales.id_sales=sales_detail.id_sales')
            ->join('partner', 'partner.id_partner=sales.id_partner')
            ->join('area', 'area.id_area=sales.id_area')
            ->where('sales.id_sales', $id_sales)
            ->find()[0];
        $data['model'] = $this->mdSales
            ->join('partner', 'partner.id_partner=sales.id_partner')
            ->join('nota', 'nota.id_sales=sales.id_sales')
            ->join('area', 'area.id_area=nota.id_area')
            ->join('customer', 'customer.id_customer=nota.id_customer')
            ->join('sales_detail', 'sales_detail.id_sales=sales.id_sales')
            ->join('nota_detail', 'nota_detail.id_nota=nota.id_nota')
            ->join('price_detail', 'price_detail.id_price_detail=sales_detail.id_price_detail')
            ->join('product', 'product.id_product=price_detail.id_product')
            ->groupBy('nota.id_nota')
            ->where('sales.id_sales', $id_sales)
            ->findAll();

        return view('admin_kas_kecil/piutang_usaha/kredit/tambah', $data);
    }
}
