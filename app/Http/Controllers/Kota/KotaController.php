<?php

namespace App\Http\Controllers\Kota;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KotaRequest;

class KotaController extends Controller
{
    public function index(){
        $data['kota'] = Kota::leftJoin('provinsi','provinsi.id','kota.id_provinsi')->select('kota.id','provinsi.nama_provinsi','kota.nama_kota')->get();
        return view('kota/index',$data);
    }
    public function tambah(){
        $data['provinsi'] = Provinsi::get();
        return view('kota/tambah',$data);
    }
    public function tambahKota(KotaRequest $k){
        if ($k->validated()) {

            Kota::create([
                'id_provinsi' => $k->id_provinsi,
                'nama_kota' => $k->nama_kota
            ]);
            return redirect('kota')->with('pesan','Kota berhasil ditambahkan');
        }
    }
}
