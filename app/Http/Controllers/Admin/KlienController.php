<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.klien.home', compact('user'));
    }
}
