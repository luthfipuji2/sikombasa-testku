<?php

namespace App\Http\Controllers\Translator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.translator.home', compact('user'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('pages.translator.profile', compact('user'));
    }
    public function find()
    {
        $user = Auth::user();
        return view('pages.translator.find', compact('user'));
    }
    public function todo()
    {
        $user = Auth::user();
        return view('pages.translator.todo', compact('user'));
    }
    public function review()
    {
        $user = Auth::user();
        return view('pages.translator.review', compact('user'));
    }
    public function career()
    {
        $user = Auth::user();
        $provinces = Province::pluck('name', 'id');
        return view('pages.translator.career', [
            'provinces' => $provinces,
            'user' => $user
            ]);
    }
    public function storeCities(Request $request){
        $cities = City::where('province_id', $request->get('id'))->pluck('name', 'id');
        return response()->json($cities);
    }
    
}
