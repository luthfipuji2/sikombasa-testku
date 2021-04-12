<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    
}
