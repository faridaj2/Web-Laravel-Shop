@extends('layout.template')

@section('container')
    <div class="rounded w-full  grid grid-cols-1 md:grid-cols-3 gap-5 mt-5">
        <div class="rounded overflow-hidden relative shadow-lg">
            <img class="w-full h-52 object-cover" src="https://picsum.photos/1231/2123/?random=4" alt="">
            <div
                class="bg-gradient-to-r from-yellow-500/40 to-transparent w-1/2 px-2 font-bold text-white absolute top-3 left-3 rounded">
                Contoh Gambar 1</div>
        </div>
        <div class="rounded overflow-hidden relative shadow-lg">
            <img class="w-full h-52 object-cover" src="https://picsum.photos/1231/2123/?random=5" alt="">
            <div
                class="bg-gradient-to-r from-yellow-500/40 to-transparent w-1/2 px-2 font-bold text-white absolute top-3 left-3 rounded">
                Contoh Gambar 1</div>
        </div>
        <div class="rounded overflow-hidden relative shadow-lg">
            <img class="w-full h-52 object-cover" src="https://picsum.photos/1231/2123/?random=6" alt="">
            <div
                class="bg-gradient-to-r from-yellow-500/40 to-transparent w-1/2 px-2 font-bold text-white absolute top-3 left-3 rounded">
                Contoh Gambar 1</div>
        </div>
    </div>
@endSection
