<?php

namespace App\Http\Controllers\Mapel;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Requests\MapelRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\MapelUpdateRequest;

class MapelController extends Controller
{
    public function mapel()
    {
        $data['mapel'] = Mapel::get();
        return view('mapel/mapel', $data);
    }

    public function tambah()
    {
        return view('mapel/tambah');
    }

    public function save(MapelRequest $m)
    {
        if ($m->validated()) {
            $foto = $m->foto->getClientOriginalName();
            $m->foto->move('foto/', $foto);

            Mapel::create([
                'kode' => $m->kode,
                'mapel' => $m->mapel,
                'pengajar' => $m->pengajar,
                'deskripsi' => $m->deskripsi,
                'foto' => $foto
            ]);
            return redirect('mapel')->with('pesan', 'Mapel berhasil ditambahkan');
        }
    }

    public function edit($id)
    {
        $data['mapel'] = Mapel::where('id', $id)->first();
        return view('mapel/edit', $data);
    }

    public function update(MapelUpdateRequest $m, $id)
    {
        if ($m->validated()) {
            if ($m->foto) {
                // cek nama file sebelumnya
                $cek = Mapel::where('id', $id)->first();
                // jika file sebelumnya ada maka jalankan perintah hapus
                if (File::exists(public_path('foto/' . $cek->foto))) {
                    File::delete(public_path('foto/' . $cek->foto));
                }
                $foto = $m->foto->getClientOriginalName();
                $m->foto->move('foto/', $foto);

                $data['foto'] = $foto;
            }
            $data['kode'] = $m->kode;
            $data['mapel'] = $m->mapel;
            $data['pengajar'] = $m->pengajar;
            $data['deskripsi'] = $m->deskripsi;

            mapel::where('id', $id)->update($data);
            return redirect('mapel')->with('pesan', 'Update Mapel berhasil');
        }
    }

    public function hapus($id)
    {
        Mapel::where('id', $id)->delete();
        return back()->with('pesan', 'Mapel berhasil di hapus');
    }
}
