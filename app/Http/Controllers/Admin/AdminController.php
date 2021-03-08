<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.admin.home', compact('user'));
    }
}
