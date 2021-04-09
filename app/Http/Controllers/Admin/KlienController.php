<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('pages.klien.home', compact('user'));
    }

    //buat menu
    public function index(){
        $menu=Order::all();
        return view('pages.klien.menu_order', compact('menu'));
    }

    
    public function store(Request $request){
        Order::create([
            'jenis_layanan'=>$request->jenis_layanan, 
            'text'=>$request->text
        ]);
        return redirect('/menu-order')->with('success', 'Data berhasil ditambahkan');
    }
}
