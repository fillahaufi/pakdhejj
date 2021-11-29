<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Models\Pesanan;

class AdminController extends Controller
{
    public function login() {
        return view('admin/login');
    }

    public function home() {
        $allproduk = Produk::all();
        $nproduk = $allproduk->count();

        $allselling = Pesanan::all();
        $nselling = $allselling->count();

        return view('admin/adminhome')
            ->with('allproduk', $allproduk)
            ->with('nproduk', $nproduk)
            ->with('nselling', $nselling);
    }

    public function manage() {
        $allproduk = Produk::all();
        return view('admin/manage')
            ->with('allproduk', $allproduk);
        // $addProduk = new ProdukController;
        // return $addProduk->store($request);
    }
    
    public function selling() {
        $allselling = Pesanan::all();
        $nselling = $allselling->count();

        return view('admin/selling')
            ->with('allselling', $allselling)
            ->with('nselling', $nselling);
    }
}
