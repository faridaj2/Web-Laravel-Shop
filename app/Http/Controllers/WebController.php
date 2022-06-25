<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WebController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
            'kategori' => Category::all(),
            'slide' => Slideshow::all(),
            'post' => Product::all(),
        ];
        return view('index', $data);
    }
    
    public function produk(){
        $data = [
            'title' => 'Produk',
            'kategori' => Category::all(),
            'slide' => Slideshow::all(),
            'post' => Product::all(),
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
            'slide' => Slideshow::all()
        ];
        return view('dashboard.slideshow', $data);
    }
    public function kategori_(){
        $data = [
            'title' => 'Kategori',
            'kategori' => Category::get(),
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

    //admin model

    public function slideAdd(Request $request){
        foreach($request->file('gambar') as $item){
            $item->store('public/slide');
            Slideshow::create([
                'nama' => $item->hashName(),
            ]);
        }

        return self::slideshow_();

    }
    public function slideDelete($request){

        Slideshow::destroy($request);
        return self::slideshow_();

    }

    public function kategoriUpdate(Request $request){
        $kategori = Category::create([
            'categories' => $request->kategori,
        ]);
        return self::kategori_();

    }
    public function hapusKategori($request){

        Category::destroy($request);
        return self::kategori_();

    }

    
}
