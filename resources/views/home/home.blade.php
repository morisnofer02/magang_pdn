@extends('template.template')

@if(session('pesan'))
    @php
        $pesan = session('pesan');
    @endphp
    <script>
        alert("{{ $pesan }}");
    </script>
@endif

@section('title')
    Home
@endsection

@section('content')
    <div class="container mx-auto mt-10 max-w-7xl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            {{-- <h1 class="text-3xl font-bold mb-4 text-center">Welcome To My Website!</h1> --}}
            <h1 class="text-3xl font-bold mb-4 text-center">
            @if(Auth::check())
                Welcome {{ strtoupper(Auth::user()->name) }}!
            @else
                Welcome To My Website!
            @endif
        </h1>

            <div class="w-full max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
              <article class="bg-white p-6 rounded-lg shadow-lg">
                <a href="">
                  <h1 class="text-2xl font-bold">Artikel Pertama</h1>
                </a>
                <div class="text-base mb-4">
                  <a href="">Moris Nofer Nanda Alim</a> | 02 Januari 2000
                </div>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel possimus natus assumenda qui voluptates, repellendus eaque dolores rerum itaque esse temporibus fugiat, necessitatibus amet dolorum excepturi eius modi nesciunt nam.</p>
                <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
              </article>

              <article class="bg-white p-6 rounded-lg shadow-lg">
                <a href="">
                  <h1 class="text-2xl font-bold">Artikel Kedua</h1>
                </a>
                <div class="text-base mb-4">
                  <a href="">Moris Nofer Nanda Alim</a> | 02 February 2000
                </div>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel possimus natus assumenda qui voluptates, repellendus eaque dolores rerum itaque esse temporibus fugiat, necessitatibus amet dolorum excepturi eius modi nesciunt nam.</p>
                <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
              </article>

              <article class="bg-white p-6 rounded-lg shadow-lg">
                <a href="">
                  <h1 class="text-2xl font-bold">Artikel Ketiga</h1>
                </a>
                <div class="text-base mb-4">
                  <a href="">Moris Nofer Nanda Alim</a> | 02 Maret 2000
                </div>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel possimus natus assumenda qui voluptates, repellendus eaque dolores rerum itaque esse temporibus fugiat, necessitatibus amet dolorum excepturi eius modi nesciunt nam.</p>
                <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
              </article>

              <article class="bg-white p-6 rounded-lg shadow-lg">
                <a href="">
                  <h1 class="text-2xl font-bold">Artikel Keempat</h1>
                </a>
                <div class="text-base mb-4">
                  <a href="">Moris Nofer Nanda Alim</a> | 02 April 2000
                </div>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel possimus natus assumenda qui voluptates, repellendus eaque dolores rerum itaque esse temporibus fugiat, necessitatibus amet dolorum excepturi eius modi nesciunt nam.</p>
                <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
              </article>
          </div>
        </div>
    </div>
@endsection

