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
    Halaman Mapel
@endsection

@section('content')
<div class="container mx-auto mt-10 max-w-7xl">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="flex justify-between">
      <div class="text-3xl">Data Mapel</div>
        <div>
    <a href="{{ route('tambah-mapel') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md"> Tambah Data</a>
  </div>
</div>

<table class="table w-full mt-5 border p-3">
  <thead>
    <tr class="border p-3">
      <th class="border p-3">No</th>
      <th class="border p-3">Kode</th>
      <th class="border p-3">Mata Pelajaran</th>
      <th class="border p-3">Nama Pengajar</th>
      <th class="border p-3">Deskripsi</th>
      <th class="border p-3">Foto</th>
      <th class="border p-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mapel as $m => $mp)
      <tr class="border p-3">
        <td class="border p-3">{{ $m+1 }}</td>
        <td class="border p-3">{{ $mp->kode }}</td>
        <td class="border p-3">{{ $mp->mapel }}</td>
        <td class="border p-3">{{ $mp->pengajar }}</td>
        <td class="border p-3">{{ $mp->deskripsi }}</td>
        <td class="border p-3"><img src="{{ asset('foto/'.$mp->foto) }}" alt="" width="200px" height="200px"></td>
        <td class="border p-3">
          <div class="flex gap-3 justify-center">
            <a href="{{ route('edit-mapel',$mp->id) }}" class="bg-yellow-500 flex items-center justify-center hover:bg-yellow-400 text-white rounded-md w-14 h8 p-2">Edit</a>
            <a href="{{ route('hapus-mapel',$mp->id) }}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h8 p-2" onclick="return confirm('Apa anda yakin menghapus mapel ini?');">Hapus</a>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>
@endsection