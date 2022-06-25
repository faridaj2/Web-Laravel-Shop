@extends('layout.template')

@section('container')
    <div class="w-full  md:grid grid-cols-4">
        <div class=" hidden md:block col-span-1">
            <div class="text-left w-full font-bold mt-10">Kategori</div>
            <div class="mt-5 flex flex-col">
                <a href="" class="border-b border-solid p-2 mr-3 hover:bg-gray-200 bg-gray-200">Kategori 1</a>
                <a href="" class="border-b border-solid p-2 mr-3 hover:bg-gray-200">Kategori 1</a>
                <a href="" class="border-b border-solid p-2 mr-3 hover:bg-gray-200">Kategori 1</a>
                <a href="" class="border-b border-solid p-2 mr-3 hover:bg-gray-200">Kategori 1</a>
            </div>
        </div>
        <div class="col-span-3">
            <div class="text-left w-full md:w-auto font-bold mt-10 flex justify-between"><span>Barang
                    Terbaru</span><span><a href=""
                        class="font-normal text-sm text-white p-1 rounded bg-blue-300 hover:bg-blue-500 shadow">Lihat
                        Semua</a></span></div>
            <div class="mt-3 grid gap-5 p-5 md:p-0 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mn:grid-cols-1">

                @foreach ($post as $item)
                    <div class="h-96 w-full rounded-3xl shadow-lg overflow-hidden grid grid-cols-1">
                        <div class="h-48 overflow-hidden">
                            <img class="object-cover h-full w-full" src="{{ $item['image'][0] }}" alt="">
                        </div>
                        <div class="bg-white p-3 h-48 relative">
                            <div class="font-bold mb-2  trct">{{ $item['nama'] }}</div>
                            <div class="font-normal text-[12px] trct desc">{!! $item['deskripsi'] !!}</div>
                            <a href="/detail/{{ $item['slug'] }}"
                                class="absolute left-[50%] translate-x-[-50%] bottom-5 text-center rounded font-bold text-white bg-blue-400 w-10/12 p-2 hover:bg-blue-700 transition duration-500 drop-shadow-xl">Detail</a>
                        </div>
                    </div>
                @endForeach
            </div>
        </div>
    </div>
@endSection
