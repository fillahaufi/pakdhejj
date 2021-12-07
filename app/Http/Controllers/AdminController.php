<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\DetailPesanan;

class AdminController extends Controller
{
    public function login() {
        return view('/admin/login', [
            'title' => 'login'
        ]);
    }

    public function home() {
        $allproduk = Produk::all();
        $nproduk = $allproduk->count();

        $allselling = Pesanan::all();
        $nselling = $allselling
            ->where('isdone', '=', 1)
            ->count();

        // $nprodsell = 0;
        // for ($i=0; $i < $nselling; $i++) {
        //     # code...
        //     $produkselling[$i] = DB::table('detail_pesanans')
        //         ->join('produks', 'detail_pesanans.produk_id', '=', 'produks.id_produk')
        //         ->select('detail_pesanans.jumlah', 'produks.nama')
        //         ->where('produk_id','=', $allproduk[$i]->id_produk)
        //         ->get();

            // $nprodsell;
            // for ($j=0; $j < count($produkselling); $j++) {
            //     # code...
            //     $nprodsell += $produkselling[$i][$j]->jumlah;
            // }
        // }

        $produkselling = DB::table('produks')
            ->leftJoin('detail_pesanans', 'detail_pesanans.produk_id', '=', 'produks.id_produk')
            ->select('produks.id_produk', DB::raw('SUM(jumlah) AS jmlsold'), 'produks.nama', 'produks.isavail')
            ->groupBy('produks.id_produk')
            ->groupBy('detail_pesanans.produk_id')
            ->groupBy('produks.nama')
            ->groupBy('produks.isavail')
            ->orderBy('jmlsold', 'DESC')
            ->where('produks.isavail', '!=', 2)
            ->get();

        return view('admin/adminhome')
            ->with('allproduk', $allproduk)
            ->with('nproduk', $nproduk)
            ->with('produkselling', $produkselling)
            ->with('nselling', $nselling);
            // ->with('nprodsell', $nprodsell)
        // return $produkselling;
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

        $nsucselling = DB::table('pesanans')
            ->where('isdone', '=', 1)
            ->get();

        $sumselling = 0;
        for ($c=0; $c < $nsucselling->count(); $c++) {
            # code...
            $sumselling += $nsucselling[$c]->total_harga;
        }

        // $allprodukbought = DetailPesanan::all();
        // $produkbought = $allprodukbought
        //     ->with('nota_id','=', $allselling->id_nota);
        $produkbought = [];
        for ($i=0; $i < $nselling; $i++) {
            # code...
            $produkbought[$i] = DB::table('detail_pesanans')
                ->join('produks', 'detail_pesanans.produk_id', '=', 'produks.id_produk')
                ->select('detail_pesanans.*', 'produks.*')
                ->where('nota_id','=', $allselling[$i]->id_nota)
                ->get();
        }

        $sellingnow = $allselling
            ->where('isdone', '=', 0);

        $sellinghis = $allselling
            ->where('isdone', '!=', 0);

        return view('admin/selling')
            ->with('allselling', $allselling)
            ->with('produkbought', $produkbought)
            ->with('sellingnow', $sellingnow)
            ->with('sellinghis', $sellinghis)
            ->with('nselling', $nselling)
            ->with('sumselling', $sumselling);
        // return $produkbought;
        //     ->where('nota_id', '=', $allselling[0]->id_nota);
    }

    public function accSelling(Pesanan $accselling)
    {
        $donenow = $accselling->isdone;
        if ($donenow == 0) {
            $accselling->isdone = 1;
            $accselling->save();
        }

        return redirect('/admin/selling')
            ->with('success', 'Pesanan berhasil di-update');
    }

    public function decSelling(Pesanan $decselling)
    {
        $donenow = $decselling->isdone;
        if ($donenow == 0) {
            $decselling->isdone = 2;
            $decselling->save();
        }

        return redirect('/admin/selling')
            ->with('success', 'Pesanan berhasil di-batalkan');
    }
}
