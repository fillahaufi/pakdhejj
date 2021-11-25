<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function home() {
        $allproduk = Produk::all();
        return view('homepage')
            ->with('allproduk', $allproduk);
    }
}
