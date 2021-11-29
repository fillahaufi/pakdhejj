<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
// use Illuminate\Support\Facades\Input; 

class CheckoutController extends Controller
{
    public function checkout() {
        // $sessiondata = Session::get('cart[0].name');
        $sessiondata = Session::all();
        // $sessiondata = session('cart');
        // return $sessiondata;
        return view('checkout');
            // ->with('sessiondata', $sessiondata);
    }

    public function getcart(Request $request)
    {
        $this->validate($request, [
            'atas_nama' => 'required',
            'no_meja' => 'required',
            'total_harga' => 'required',
        ]);
        $cartdata = $_GET["halah"];
        $jml_org = $request->input('jml_org');
        if ($jml_org != null) {
            # code...
            if ($jml_org == 2) {
                # code...
                $mejanya = rand(21, 25);
            } 
            elseif ($jml_org == 4) {
                # code...
                $mejanya = rand(26, 30);
            }
            elseif ($jml_org == 6) {
                # code...
                $mejanya = rand(31, 35);
            }
            elseif ($jml_org == 8) {
                # code...
                $mejanya = rand(36, 40);
            }
            elseif ($jml_org == 10) {
                # code...
                $mejanya = rand(41, 45);
            }
            else {
                # code...
                return 'ewow';
            }
        } 
        else {
            # code...
            $mejanya = $request->input('no_meja');
        }

        $pesanan = new Pesanan;
        $pesanan->atas_nama = $request->input('atas_nama');
        $pesanan->no_meja = $request->input('no_meja');
        $pesanan->total_harga = $request->input('total_harga');
        $pesanan->isdone = 0;
        $pesanan->admin_id = 1;
        $pesanan->save();
        $idpesanan = $pesanan->id;

        for ($i=0; $i < count($cartdata); $i++) { 
            $detailPesanan = new DetailPesanan;
            $detailPesanan->jumlah = $cartdata[$i]['count'];
            if (isset($cartdata[$i]['name'])) {
                # code...
                $namanya[$i] = $cartdata[$i]['name'];
            }
            $produknya[$i] = DB::table('produks')
                ->where('nama', '=', $namanya[$i])
                ->first();
            $detailPesanan->nota_id = $idpesanan;
            $detailPesanan->produk_id = $produknya[$i]->id_produk;
            $detailPesanan->save();
        }

        // return 'success';
        return redirect('/checkout')
            ->with('success', 'Berhasil melakukan pemesanan!');
    }
}
