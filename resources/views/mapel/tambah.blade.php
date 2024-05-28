@extends('template.template')

@section('title')
    Tambah Mapel
@endsection

@section('content')
<div class="container mx-auto mt-10 max-w-7xl">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h1 class="text-center font-semibold text-3xl">Form Tambah Mapel</h1>
    <form action="{{ route('save-mapel') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col gap-2">
        <label for="">Kode Mapel</label>
        <input type="text" name="kode" class="p-2 border rounded-md" value="{{ old('kode') }}">
        <span class="text-red-500">{{ $errors->first('kode') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Mata Pelajaran</label>
        <input type="text" name="mapel" class="p-2 border rounded-md" value="{{ old('mapel') }}">
        <span class="text-red-500">{{ $errors->first('mapel') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Nama Pengajar</label>
        <input type="text" name="pengajar" class="p-2 border rounded-md" value="{{ old('pengajar') }}">
        <span class="text-red-500">{{ $errors->first('pengajar') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi" id="" cols="30" rows="5" class="border rounded-md">{{ old('deskripsi') }}</textarea>
        <span class="text-red-500">{{ $errors->first('deskripsi') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span class="text-red-500">{{ $errors->first('foto') }}</span>
      </div>

      <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection