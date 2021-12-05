<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin.register', [
            'title' => 'Register'
        ]);
    }

    public function store()
    {
        return request()->all();
    }
}
