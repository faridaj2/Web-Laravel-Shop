@extends('dashboard.admin')

@section('container')
<section id="produk" class="p-2 nunito bg-white px-3">
    <div class="text-lg font-extrabold my-3">Produk</div>
    <div class="">
        <div class="mt-3 grid gap-5 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mn:grid-cols-1">

            <div class="h-96 w-full rounded-3xl shadow-lg overflow-hidden grid grid-cols-1">
                <div class="h-48 overflow-hidden">
                    <img class="object-cover h-full w-full" src="https://picsum.photos/600/400" alt="">
                </div>
                <div class="bg-white p-3 h-48 relative">
                    <div class="font-bold mb-2  trct">Nama Produk yang panjang
                        sekalsssssssssssssssss si sampai tidak bisa</div>
                    <div class="font-normal text-[12px] trct desc">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Amet, quia. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolor, adipisci.</div>
                    <div
                        class="absolute left-[50%] translate-x-[-50%] bottom-5 text-center text-white w-10/12 p-2drop-shadow-md">
                        <button class="bg-blue-500 p-2 rounded-md font-bold shadow-sm">Edit</button>
                        <button class="bg-red-500 p-2 rounded-md font-bold shadow-md">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <form action="" class="mt-1">

        <input
            class="custom-file-input inline-block w-full mt-1 md:w-1/4 border-2 border-stone-400 border-solid p-1 rounded-lg"
            type="file" placeholder="Upload Gallery" multiple>
        <input class="inline-block mt-1 w-full md:w-1/4 border-2 border-stone-400 border-solid p-2 rounded-lg"
            type="text" placeholder="Nama Produk">
        <input class="inline-block mt-1 w-full md:w-1/4 border-2 border-stone-400 border-solid p-2 rounded-lg"
            type="text" placeholder="Harga">
        <textarea name="" id="" cols="30" rows="10"
            class="inline-block mt-1 w-full border-stone-400 border-2 text-clip border-solid p-2 rounded-lg"
            placeholder="Deskripsi"></textarea>
        <textarea name="" id="" cols="30" rows="10"
            class="inline-block mt-1 w-full border-stone-400 border-2 text-clip border-solid p-2 rounded-lg"
            placeholder="Fitur Produk"></textarea>
        <textarea name="" id="" cols="30" rows="10"
            class="inline-block mt-1 w-full border-stone-400 border-2 text-clip border-solid p-2 rounded-lg"
            placeholder="Spesifikasi"></textarea>
        <textarea name="" id="" cols="30" rows="10"
            class="inline-block mt-1 w-full border-stone-400 border-2 text-clip border-solid p-2 rounded-lg"
            placeholder="Syarat & Ketentuan"></textarea>
        <input
            class="inline-block mt-1 w-full md:w-2/4 cursor-pointer p-2 bg-blue-700 rounded-md font-bold text-white"
            type="submit" value="Tambah">
    </form>
</section>
@endSection