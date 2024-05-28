@extends('template.template')

@section('title')
    Tambah Data
@endsection

@section('content')
<div class="container mx-auto mt-10 max-w-7xl">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h1 class="text-center font-semibold text-3xl">Form Tambah Pengguna</h1>
    <form action="{{ route('save') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col gap-2">
        <label for="">Nama</label>
        <input type="text" name="nama" class="p-2 border rounded-md" value="{{ old('nama') }}">
        <span>{{ $errors->first('nama') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Email</label>
        <input type="email" name="email" class="p-2 border rounded-md" value="{{ old('email') }}">
        <span>{{ $errors->first('email') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">No Telp</label>
        <input type="text" name="telpon" class="p-2 border rounded-md" value="{{ old('telpon') }}">
        <span>{{ $errors->first('telpon') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span>{{ $errors->first('foto') }}</span>
      </div>

      <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection