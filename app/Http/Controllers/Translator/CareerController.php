<?php
namespace App\Http\Controllers\Translator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use App\Models\Translator\Translator;
use App\Models\Translator\Certificate;
use App\Models\Translator\Document;

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
            'foto_ktp'      => 'required|image'
        ]);

        $foto_ktp = $request->foto_ktp;
        $nm_ktp=$foto_ktp->getClientOriginalName();
        $foto_ktp->move(public_path().'\img\biodata', $nm_ktp);

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

        // $this->validate($request, [
        //     'no_sertifikat'     => 'required',
        //     'nama_sertifikat'   => 'required',
        //     'bukti_dokumen'     => 'required|image',
        //     'diterbitkan_oleh'  => 'required',
        //     'masa_berlaku'      => 'required|date'
        // ]);

        $nama_sertifikat=$request->nama_sertifikat;
        $no_sertifikat=$request->no_sertifikat;
        $bukti_dokumen=$request->bukti_dokumen;
        $diterbitkan_oleh=$request->diterbitkan_oleh;
        $masa_berlaku=$request->masa_berlaku;
        
        $total = count($no_sertifikat);
        
        for($i=0;$i<$total;$i++)
        {

            $data['no_sertifikat'] = $no_sertifikat[$i];
            $data['nama_sertifikat'] = $nama_sertifikat[$i];
            $data['bukti_dokumen'] = $bukti_dokumen[$i];
            $data['diterbitkan_oleh'] = $diterbitkan_oleh[$i];
            $data['masa_berlaku'] = $masa_berlaku[$i];

            $nm_dokumen=$bukti_dokumen[$i]->getClientOriginalName();
            $bukti_dokumen[$i]->move(public_path().'\img\sertifikat', $nm_dokumen);

            Certificate::create($data);
        }
        return redirect('/progress');
    }
    public function submitDocument(Request $request){
        
        $this->validate($request, [
            'cv'                   => 'required|image',
            'ijazah_terakhir'      => 'required|image',
            'portofolio'           => 'required|image',
            'sk_sehat'             => 'required|image',
            'skck'                 => 'required|image'
        ]);

        $cv = $request->cv;
        $ijazah_terakhir = $request->ijazah_terakhir;
        $portofolio = $request->portofolio;
        $sk_sehat = $request->sk_sehat;
        $skck = $request->skck;

        $nm_cv=$cv->getClientOriginalName();
        $nm_ijazah=$ijazah_terakhir->getClientOriginalName();
        $nm_portofolio=$portofolio->getClientOriginalName();
        $nm_sk=$sk_sehat->getClientOriginalName();
        $nm_skck=$skck->getClientOriginalName();

        // Document::create($request->all());

        $dokumen = new Document;
        $dokumen->id = $request->id;
        $dokumen->cv = $cv;
        $dokumen->ijazah_terakhir = $ijazah_terakhir;
        $dokumen->portofolio = $portofolio;
        $dokumen->sk_sehat = $sk_sehat;
        $dokumen->skck = $skck;

        $cv->move(public_path().'\img\dokumen', $nm_cv);
        $ijazah_terakhir->move(public_path().'\img\dokumen', $nm_ijazah);
        $portofolio->move(public_path().'\img\dokumen', $nm_portofolio);
        $sk_sehat->move(public_path().'\img\dokumen', $nm_sk);
        $skck->move(public_path().'\img\dokumen', $nm_skck);

        $dokumen->save();
        return redirect('/certificate');

        // dd($request->all());
    }
    public function indexProgress(){

        $user = Auth::user();
        return view('pages.translator.progress', compact('user'));
    }
}
?>