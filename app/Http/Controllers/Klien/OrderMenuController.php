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
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class OrderMenuController extends Controller
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

    public function indexDokumen(){
        $menu=Order::all();
        return view('pages.klien.order_dokumen', compact('menu'));
    }

    public function submitDokumen(Request $request, Klien $id_klien){
        
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $validateOrder=$request->validate([
            'jenis_layanan'=>'required',
            'durasi_pengerjaan'=>'required',
            'nama_dokumen'=>'required',
            'upload_dokumen'=>'required',
        ]);

        Order::create([
            'id_klien'=>$klien->id_klien,
            'jenis_layanan'=>$validateOrder['jenis_layanan'],
            'durasi_pengerjaan'=>$validateOrder['durasi_pengerjaan'],
            'nama_dokumen'=>$validateOrder['nama_dokumen'],
            'upload_dokumen'=>$validateOrder['upload_dokumen'],
            'tgl_order'=>Carbon::now()->timestamp,
        ]);
        return redirect('/show-order-dokumen');
    }

    public function showOrderDokumen(Klien $id_klien, Order $order){
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $order=Order::all();
        //return ($klien);
        return view('pages.klien.ShowOrderDokumen', compact('order', 'user', 'klien'));
    }

    public function deleteOrderDokumen(Order $order){
        Order::destroy($order->id_order);
        return redirect('/order-dokumen')->with('success', 'Data harga berhasil dihapus');
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
    public function store(Request $request)
    {
        $user=Auth::user();
        $klien=Klien::where('id_klien', $user->id)->first();
        Order::create([
            'id_klien'=>$klien->id_klien,
            'jenis_layanan'=>$request->jenis_layanan, 
            'text'=>$request->text
        ]);
        return redirect(route('menu-order.index'))->with('success', 'Data berhasil ditambahkan');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function show($id)
    {
        //
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

