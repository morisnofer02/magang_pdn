<?php

namespace App\Http\Controllers\Pengguna;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\File;

class PenggunaController extends Controller
{
    public function pengguna(){
        $data['user'] = Pengguna::get();
        return view('pengguna/pengguna',$data);
    }

    public function tambah(){
        return view('pengguna/tambah');
    }

    public function save(UserRequest $r){
        if ($r->validated()) {
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/',$foto);

            Pengguna::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telpon' => $r->telpon,
                'foto' => $foto
            ]);
            return redirect('pengguna')->with('pesan','Input data berhasil');
        }
    }
    public function edit($id){
        $data['pengguna'] = Pengguna::where('id',$id)->first();
        return view('pengguna/edit', $data);
    }
    public function update(UpdateRequest $r, $id){
        if ($r->validated()) {
            if($r->foto){
            // cek nama file sebelumnya
            $cek = Pengguna::where('id',$id)->first();
            // jika file sebelumnya ada maka jalankan perintah hapus
            if(File::exists(public_path('foto/'.$cek->foto))){
                File::delete(public_path('foto/'.$cek->foto));
            }
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/',$foto);

            $data['foto'] = $foto;
        }
        $data['nama'] = $r->nama;
        $data['email'] = $r->email;
        $data['telpon'] = $r->telpon;

        pengguna::where('id',$id)->update($data);
        return redirect('pengguna')->with('pesan','Update data berhasil');
        }
    }

    public function hapus($id){
        Pengguna::where('id',$id)->delete();
        return back()->with('pesan','Pengguna berhasil di hapus');
    }
}
