@extends('template.template')

@section('title')
    Tambah Kota
@endsection

@section('content')
<div class="container mx-auto mt-10 max-w-7xl">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h1 class="text-center font-semibold text-3xl">Form Tambah Kota</h1>
    <form action="{{ route('tambah-data-kota') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col gap-2">
        <label for="">Nama Provinsi</label>
        <select name="id_provinsi" id="id_provinsi" class="p-2 border rounded-md">
            <option value="">-- Pilih Provinsi --</option>
            @foreach ($provinsi as $i => $a)
                <option value="{{ $a->id }}">{{ $a->nama_provinsi }}</option>
            @endforeach
        </select>
        <span class="text-red-500">{{ $errors->first('id_provinsi') }}</span>
        {{-- <span class="text-red-500">{{ $errors->first('kode') }}</span> --}}
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Nama Kota</label>
        <input type="text" name="nama_kota" class="p-2 border rounded-md">
        <span class="text-red-500">{{ $errors->first('nama_kota') }}</span>
      </div>

      <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection