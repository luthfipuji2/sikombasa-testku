<?php
namespace App\Http\Controllers\Translator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use App\Models\Translator\Translator;

use Illuminate\Http\Request;
class CareerController extends Controller
{
    public function index()
    {
        // $career = DB::table('translator')->get();
        $user = Auth::user();
        // $provinces = Province::pluck('name', 'id');
        return view('pages.translator.career', compact('user'));
    }
    public function store(Request $request){
        // $user = Auth::user();
        // return view('pages.translator.career', compact('user'));
        // Translator::create([
        //     'id' => $request->id,
        //     'nik' => $request->nik,
        //     'keahlian' => $request->keahlian,
        //     'provinsi' => $request->provinsi,
        //     'kabupaten' => $request->kabupaten,
        //     'kecamatan' => $request->kecamatan,
        //     'kode_pos' => $request->kode_pos,
        //     'alamat' => $request->alamat,
        //     'nama_bank' => $request->nama_bank,
        //     'nama_rekening' => $request->nama_rekening,
        //     'rekening_bank' => $request->rekening_bank,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'no_telp' => $request->no_telp,
        //     'foto_ktp' => $request->foto_ktp
        // ]);
        return $request;
    }
}
?>