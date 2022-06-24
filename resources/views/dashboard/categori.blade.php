@extends('dashboard.admin')

@section('container')
<section id="kategori" class="p-2 nunito bg-white px-3">
    <div class="text-lg font-extrabold my-3">Kategori</div>
    <div class="flex justify-between bg-white shadow-md p-2 rounded-md my-2">
        <p>Kategori 1</p>
        <a href=""><i class="fa-solid fa-trash text-blue-500 hover:text-blue-700"></i></a>
    </div>

    <form action="" class="">
        <input class="inline-block w-1/2 border-2 border-stone-400 border-solid p-2 rounded-lg" type="text"
            placeholder="Tambah Kategori">
        <input class="blocl w-1/3 cursor-pointer p-2 bg-blue-700 rounded-md font-bold text-white" type="submit"
            value="Tambah">
    </form>
</section>
@endSection