<?php

namespace App\Http\Controllers\Klien;
use App\Models\User;
use App\Models\Order;
use App\Models\Klien;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BiodataKlienController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $klien=User::where('id', $user->id);
        return view('pages.klien.home', compact('user', 'klien'));
    }

    //buat menu
    public function index(Klien $klien, User $user){

        $user = Auth::user();
        $user_id = $user->id;
        $users=User::where('id', $user_id)->first();
        $klien=Klien::where('id', $users->id)->first();
        return view('pages.klien.biodata', compact('user', 'users', 'klien'));
        
    }

    public function show(Klien $klien){
        $user = Auth::user();
        $klien=Klien::where('id_klien', $user->id)->first();
        return view('pages.klien.showBiodata', compact('klien', 'user'));
    }

    public function update(Request $request){
        $user = Auth::user();

        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            
        ]);

        if(!empty($request->password)){
            $this->validate($request,[
                'password' => 'sometimes|min:8',
            ]);

            User::where('id', $user->id)->update([
                'password' => Hash::make($request ['password'])
            ]);
        }

        User::where('id', $user->id)
                    ->update([
                        'name'    => $request->name,
                        'email'     => $request->email,
                    ]);

        return redirect('/profile')->with('success', 'Profile anda berhasil diubah');
    }
    
    public function updateBioKlien(Request $request, User $user){

        Klien::where('id_klien', $user->id)->update([
            'alamat' => $request['alamat'],
            'provinsi' => $request['provinsi'],
            'kabupaten' => $request['kabupaten'],
            'kecamatan' => $request['kecamatan'],
            'kode_pos' => $request['kode_pos'],
            'tgl_lahir' => $request['tgl_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'no_telp' => $request['no_telp'],
            'foto_ktp'=>$request['foto_ktp'],
        ]);
        
        return redirect('/klien')->with('success', 'Biodata berhasil di tambahkan');
    }
}
