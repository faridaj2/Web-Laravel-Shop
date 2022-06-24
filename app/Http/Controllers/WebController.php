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

    public function galeri(){
        $data = [
            'title' => 'Galeri',
        ];
        return view('galeri', $data);
    }

    public function admin(){
        $data = [
            'title' => 'admin',
        ];
        return view('dashboard.produk', $data);
    }
}
