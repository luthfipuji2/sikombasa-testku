<?php
namespace App\Http\Controllers\Admin;
use App\Models\Admin\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Models\Translator\Translator;
use App\Models\Translator\Certificate;
use App\Models\Translator\Master_keahlian;
use App\Models\Translator\Document;

use Illuminate\Http\Request;
class HiringController extends Controller
{
    public function index(){
        $user = Auth::user();
        $translator = Translator::all();
        return view('pages.admin.hiring', [
            'user'=>$user,
            'translator'=>$translator
            ]);
    }
    public function show($id_translator){

        $user = Auth::user();
        $translator = DB::table('translator')
                        ->where('id_translator', $id_translator)
                        ->first();

        $dokumen = DB::table('lamaran_kerja')
        ->where('id_translator', $id_translator)
        ->first();

        $skills = DB::table('keahlian')
                        ->join('master_keahlian', 'keahlian.id_keahlian', '=', 'master_keahlian.id_keahlian')
                        ->where('id_translator', $id_translator)
                        ->get();

        return view('pages.admin.show', [
            'user'=>$user,
            'translator'=>$translator,
            'dokumen'=>$dokumen,
            'skills'=>$skills
            ]);

        // return $translator;
    }
}
?>