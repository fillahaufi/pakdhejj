<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin/login');
    }

    public function home() {
        return view('admin/adminhome');
    }

    public function manage() {
        return view('admin/manage');
    }
    
    public function selling() {
        return view('admin/selling');
    }
}
