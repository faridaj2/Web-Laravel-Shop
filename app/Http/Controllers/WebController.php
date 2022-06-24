<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
        ];
        return view('index', $data);
    }
    
    public function produk(){
        $data = [
            'title' => 'Produk',
        ];
        return view('produk', $data);
    }
}
