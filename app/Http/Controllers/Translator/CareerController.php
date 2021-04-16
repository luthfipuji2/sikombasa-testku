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
        return view('pages.translator.biodata', compact('user'));
    }
    public function store(Request $request){
        Translator::create($request->all());
        return redirect('/document');
    }
    public function indexDocument()
    {
        // $career = DB::table('translator')->get();
        $user = Auth::user();
        // $provinces = Province::pluck('name', 'id');
        return view('pages.translator.document', compact('user'));
    }
}
?>