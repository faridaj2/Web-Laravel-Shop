@extends('dashboard.admin')

@section('container')
<section id="slide-show" class="p-2 nunito bg-white px-3">
    <div class="text-lg font-extrabold my-3">Slide Show</div>

    <div class="relative mb-2 rounded-md shadow-md overflow-hidden">

        <img class="max-h-[300px] object-contain" src="https://picsum.photos/1024/300?" alt="">

        <div class="absolute top-3 right-3">

            <a href="" class="text-white bg-yellow-400 rounded hover:bg-yellow-600 p-2 m-2"><i
                    class="fa-solid fa-trash"></i></a>
        </div>
    </div>
    <div>
        <ul id="slideText" class="list-decimal pl-5">

        </ul>
        <form class="overflow-hidden flex gap-2" action="">

            <label id=""
                class=" p-2 custom-file-input inline-block w-1/2 text-sm rounded-lg border border-stone-300 cursor-pointer "
                for="file_input">Upload file</label>
            <input class="hidden" id="file_input" onchange="fileUp(this)" type="file" title="Pip">
            <input class="inline-block cursor-pointer p-2 bg-blue-700 rounded-md font-bold text-white"
                type="submit">


        </form>
    </div>

</section>
@endSection