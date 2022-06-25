<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
            'post' => Product::showAll(),
        ];
        return view('index', $data);
    }
    
    public function produk(){
        $data = [
            'title' => 'Produk',
            'post' => Product::showAll(),
        ];
        return view('produk', $data);
    }

    public function detail($slug){
        $data = [
            'title' => 'Produk',
            'post' => Product::detail($slug),
        ];
        return view('detail', $data);
    }

    public function galeri(){
        $data = [
            'title' => 'Galeri',
        ];
        return view('galeri', $data);
    }
    public function info(){
        $data = [
            'title' => 'Galeri',
        ];
        return view('galeri', $data);
    }

    //admin

    public function slideshow_(){
        $data = [
            'title' => 'SlideShow',
        ];
        return view('dashboard.slideshow', $data);
    }
    public function kategori_(){
        $data = [
            'title' => 'Kategori',
        ];
        return view('dashboard.categori', $data);
    }
    public function produk_(){
        $data = [
            'title' => 'Produk',
        ];
        return view('dashboard.produk', $data);
    }
    public function info_(){
        $data = [
            'title' => 'Info',
        ];
        return view('dashboard.produk', $data);
    }
    public function galeri_(){
        $data = [
            'title' => 'Galeri',
        ];
        return view('dashboard.produk', $data);
    }
    
}
