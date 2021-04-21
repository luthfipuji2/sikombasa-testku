<?php
namespace App\Http\Controllers\Translator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use App\Models\Translator\Translator;
use App\Models\Translator\Certificate;

use Illuminate\Http\Request;
class CareerController extends Controller
{
    public function index()
    {
        // $career = DB::table('translator')->get();
        $user = Auth::user();
        // $provinces = Province::pluck('name', 'id');
        return view('pages.translator.biodata', compact('user'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'nik'           => 'required|size:16|unique:translator',
            'keahlian'      => 'required',
            'alamat'        => 'required|string|max:255',
            'provinsi'      => 'required|string|max:255',
            'kabupaten'     => 'required|string|max:255',
            'kecamatan'     => 'required|string|max:255',
            'kode_pos'      => 'required|numeric',
            'nama_bank'     => 'required|string',
            'nama_rekening' => 'required|string',
            'rekening_bank' => 'required',
            'tgl_lahir'     => 'required|date',
            'jenis_kelamin' => 'required',
            'no_telp'       => 'required|numeric',
            'foto_ktp'      => 'required|image',
            'foto'          => 'image'
        ]);

        Translator::create($request->all());
        return redirect('/document');
    }
    public function indexDocument()
    {
        $user = Auth::user();
        return view('pages.translator.document', compact('user'));
    }
    public function indexCertificate()
    {
        // $career = DB::table('translator')->get();
        $user = Auth::user();
        // $provinces = Province::pluck('name', 'id');
        return view('pages.translator.certificate', compact('user'));
    }
    public function submitCertificate(Request $request){

        $nama_sertifikat=$request->nama_sertifikat;
        $no_sertifikat=$request->no_sertifikat;
        $bukti_dokumen=$request->bukti_dokumen;
        $diterbitkan_oleh=$request->diterbitkan_oleh;
        $masa_berlaku=$request->masa_berlaku;
        
        foreach($no_sertifikat as $key => $no)
        {
            $data['no_sertifikat'] = $no;
            $data['nama_sertifikat'] = $nama_sertifikat[$key];
            $data['bukti_dokumen'] = $bukti_dokumen[$key];
            $data['diterbitkan_oleh'] = $diterbitkan_oleh[$key];
            $data['masa_berlaku'] = $masa_berlaku[$key];

            Certificate::create($data);
        }
    }
    public function submitDocument(Request $request){
        
        // $this->validate($request, [
        //     'cv'                   => 'required|image',
        //     'ijazah_terakhir'      => 'required|image',
        //     'portofolio'           => 'required|image',
        //     'sk_sehat'             => 'required|image',
        //     'skck'                 => 'required|image'
        // ]);

        // Document::create($request->all());
        // return redirect('/progress');

        return $request;
    }
    public function indexProgress(){

        $user = Auth::user();
        return view('pages.translator.progress', compact('user'));
    }
}
?>