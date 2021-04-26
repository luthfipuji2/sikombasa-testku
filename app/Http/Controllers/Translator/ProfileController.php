<?php
namespace App\Http\Controllers\Translator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Translator\Translator;
use App\Models\Translator\Certificate;
use App\Models\Translator\Master_keahlian;

use Illuminate\Http\Request;
class ProfileController extends Controller
{
    public function index(Translator $translator)
    {
        $user = Auth::user(); //user yang login
        $id_user = $user->id; //id user yang login
        $data = DB::table('users') //join tabel users dan translator di mana antara id users dan translator adalah sama
            ->join('translator', 'users.id', '=', 'translator.id')//translator.id adalah foreign key dari tabel users (atribut yg sama dari kedua tabel)
            ->where("users.id",$id_user)
            ->first();//load data

        $translator = Translator::where('id', $user->id)->first();
        $sertifikat = DB::table('keahlian')
            ->join('master_keahlian', 'keahlian.id_keahlian', '=', 'master_keahlian.id_keahlian')
            ->where("master_keahlian.id_translator", $translator->id_translator)
            ->get();
        return view('pages.translator.profile', [
            'data'=>$data,
            'sertifikat'=>$sertifikat
            ]); 

    }

    public function update(Request $request, Translator $translator) {

        $user = Auth::user(); //user yang login
        $id_user = $user->id; //id user yang login

        Translator::where('id', $id_user)->update([
            'nik' => $request['nik'],
            'keahlian' => $request['keahlian'],
            'alamat' => $request['alamat'],
            'provinsi' => $request['provinsi'],
            'kabupaten' => $request['kabupaten'],
            'kecamatan' => $request['kecamatan'],
            'kode_pos' => $request['kode_pos'],
            'nama_bank' => $request['nama_bank'],
            'nama_rekening' => $request['nama_rekening'],
            'rekening_bank' => $request['rekening_bank'],
            'tgl_lahir' => $request['tgl_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'no_telp' => $request['no_telp'],
            'foto_ktp' => $request['foto_ktp'],
        ]);
        // return $request;
        return redirect('/profile');       
    }

}
?>