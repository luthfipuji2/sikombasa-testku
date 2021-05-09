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
use Illuminate\Support\Facades\Storage;

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

        // $user = Auth::user();
        // $user_id = $user->id;
        // $users=User::where('id', $user_id)->first();
        // $klien=Klien::where('id', $users->id)->first();
        // return view('pages.klien.biodata', compact('user', 'users', 'klien'));    
        $user = Auth::user();

        if (Klien::where('id', $user->id)->exists()) {
            $user = Auth::user(); //current authenticated user
             //get the current authenticated user's id
            $users = DB::table('users') //join table users and table user_details base from matched id;
                ->join('klien', 'users.id', '=', 'klien.id')
                ->where("users.id",$user->id) //find the record matched to the current authenticated user's id from the joint table records
                ->first(); //get the record
        return view('pages.klien.biodata', compact('users')); 
        }
        else {
            $users = Auth::user(); //current authenticated user
            return view('pages.klien.TambahDataKlien', compact('users'));
        }
    }

    public function show(Klien $klien){
        $user = Auth::user();
        $klien=Klien::where('id_klien', $user->id)->first();
        return view('pages.klien.showBiodata', compact('klien', 'user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'foto_ktp'=>'required|file|max:10000',
        ]);

        $user = Auth::user();
        $id = $user->id;
        $path_template = Storage::putFileAs('public/foto_profile', $request->file('foto_ktp'));
        
        Klien::create([
            'id' => $request->id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'foto_ktp'=>$path_template,
        ]);

        return redirect('/profile-klien')->with('success', 'Profile anda berhasil ditambahkan');
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
    
    public function updateBioKlien(Request $request, $id_klien){

        $this->validate($request,[
            'id' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'foto_ktp'=>'required|file|max:10000',
        ]);

        $user = Auth::user();
      
        $klien= Klien::find($id_klien);
        $path_template = Storage::putFileAs('public/foto_profile', $request->file('foto_ktp'));
        
        Klien::where('id_klien', $klien->id_klien)->update([
            'id' => $request->id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'foto_ktp'=>$path_template,
        ]);

        return redirect('/profile-klien')->with('success', 'Profile anda berhasil diubah');
    }
}
