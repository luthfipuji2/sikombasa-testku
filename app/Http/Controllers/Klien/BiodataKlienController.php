<?php

namespace App\Http\Controllers\Klien;
use App\Models\User;
use App\Models\Order;
use App\Models\Klien;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BiodataKlienController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('pages.klien.home', compact('user'));
    }

    //buat menu
    public function index(Klien $klien){
        $biodata=Klien::all();
        return view('pages.klien.biodata', compact('biodata', 'klien'));
        
    }

    public function show(Klien $klien){
        $user = Auth::user();
        $klien=Klien::where('id_klien', $user->id)->firs();
        return view('pages.klien.showBiodata', compact('klien', 'user'));
    }

    
    public function store(Request $request){
        Klien::create([
            'nik'=>$request->nik,
            'alamat'=>$request->alamat,
            'provinsi'=>$request->provinsi,
            'kabupaten'=>$request->kabupaten,
            'kecamatan'=>$request->kecamatan,
            'kode_pos'=>$request->kode_pos,
            'tgl_lahir'=>$request->tgl_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'no_telp'=>$request->no_telp,
            'foto_ktp'=>$request->foto_ktp
        ]);
        return redirect('/biodata')->with('success', 'Data berhasil ditambahkan');
    }
}
