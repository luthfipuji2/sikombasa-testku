<?php

namespace App\Http\Controllers\Klien;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Order;
use App\Models\Klien;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class OrderTeksController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        return view('pages.klien.home', compact('user'));
    }
    
    public function index()
    {
        $menu=Order::all();
        return view('pages.klien.menu_order', compact('menu'));
    }

    public function indexTeks(){
        $menu=Order::all();
        return view('pages.klien.order.order_teks.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Klien $klien)
    {
        $validate_data=$request->validate([
            'jenis_layanan'=>'required',
            'durasi_pengerjaan'=>'required',
            'text'=>'required',
        ]);

        $jenis_layanan = $validate_data['jenis_layanan'];
        $durasi = $validate_data['durasi_pengerjaan'];
        $text = $validate_data['text'];
        $tgl_order=Carbon::now()->timestamp;
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();

        $order_teks=Order::create([
            'id_klien'=>$klien->id_klien,
            'jenis_layanan'=>$jenis_layanan, 
            'text'=>$text,
            'durasi_pengerjaan'=>$durasi,
            'tgl_order'=>$tgl_order,
            'is_status'=>'belum dibayar',
        ]);
        //return redirect(route('order-teks.show', $order_teks))->with('success', 'Berhasil di upload!');
        return redirect('/show-order-teks')->with('success', 'Berhasil di upload!');
        } 
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOrderTeks(Klien $id_klien, Order $order)
    {
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $order=Order::all();
        //return ($klien);
        return view('pages.klien.order.order_teks.show', compact('order', 'user', 'klien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        //
    }
}
