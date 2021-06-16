<?php

namespace App\Http\Controllers\Klien;

use App\Http\Controllers\Controller;
use App\Models\Admin\ParameterJenisLayanan;
use App\Models\Admin\ParameterJenisTeks;
use App\User;
use App\Models\Klien\Order;
use App\Models\Klien\Klien;
use App\Models\Admin\ParameterOrderHarga;
use App\Models\Admin\ParameterOrderTeks;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Mockery\Generator\Parameter;

class OrderTeksController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        return view('pages.klien.home', compact('user'));
    }
    
    public function menuOrder()
    {
        $menu=Order::all();
        return view('pages.klien.menu_order', compact('menu'));
    }

    public function index(){
        $menu=Order::all();
        $jenis_layanan=ParameterJenisLayanan::all();
        $jenis_teks=ParameterJenisTeks::all();
        return view('pages.klien.order.order_teks.index', compact('menu', 'jenis_layanan', 'jenis_teks'));
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
    public function store(Request $request, Order $order_teks)
    {
        $jenis_layanan=ParameterJenisLayanan::all();
        $jenis_teks = ParameterJenisTeks::all();
        $tgl_order=Carbon::now();
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $harga_teks=$request->jumlah_karakter;
        // return ($harga_teks);
        // exit();

        //kondisi if cek
        // $result = [];
        if($harga_teks >= 1 && $harga_teks <= 100)
        {
            // $harga=ParameterOrderTeks::select('id_parameter_order_teks')->first();
            $hasil = "1";
        }elseif($harga_teks >= 101 && $harga_teks <= 200){
            $hasil = "2";
        }elseif($harga_teks >= 201 && $harga_teks <= 300){
            $hasil = "3";
        }elseif($harga_teks >= 301 && $harga_teks <= 400){
            $hasil = "4";
        }elseif($harga_teks >= 401 && $harga_teks <= 500){
            $hasil = "5";
        }elseif($harga_teks >= 501 && $harga_teks <= 600){
            $hasil = "6";
        }elseif($harga_teks >= 601 && $harga_teks <= 700){
            $hasil = "7";
        }elseif($harga_teks >= 701 && $harga_teks <= 800){
            $hasil = "8";
        }elseif($harga_teks >= 801 && $harga_teks <= 900){
            $hasil = "9";
        }elseif($harga_teks >= 901 && $harga_teks <= 1000){
            $hasil = "10";
        }

        // return ($hasil);
        // exit();
    
        $order_teks=Order::create([
            'id_klien'=>$klien->id_klien,
            'id_parameter_jenis_layanan'=>$request->id_parameter_jenis_layanan, 
            'id_parameter_jenis_teks'=>$request->id_parameter_jenis_teks,
            'id_parameter_order_teks'=>$hasil,
            'text'=>$request->text,
            'jumlah_karakter'=>$request->jumlah_karakter,
            'durasi_pengerjaan'=>$request->durasi_pengerjaan,
            'tgl_order'=>Carbon::now(),
            'is_status'=>'belum dibayar',
        ]);
        $id_order=$order_teks->id_order;


        // return ($order_teks);
        return redirect(route('order-teks.show', $id_order))->with('success', 'Berhasil di upload!');
        } 
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_order)
    {
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $jenis_layanan=ParameterJenisLayanan::all();
        $jenis_teks=ParameterJenisTeks::all();
        $order=Order::findOrFail($id_order);
        //return ($order);
        return view('pages.klien.order.order_teks.show', compact('order', 'user', 'klien', 'jenis_layanan', 'jenis_teks'));
    }

    public function showTransaksi($id_order, $status)
    {
        
        $i = 0;
        $result = [];
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $order=Order::findOrFail($id_order); //dapat id order
        // return ($order);
        if($order != null){
            $j_layanan = ParameterJenisLayanan::where('id_parameter_jenis_layanan', $order->id_parameter_jenis_layanan)->first();
            $j_teks = ParameterJenisTeks::where('id_parameter_jenis_teks', $order->id_parameter_jenis_teks)->first();
            $jml_karakter = ParameterOrderTeks::where('id_parameter_order_teks', $order->id_parameter_order_teks)->first();
    
            if($j_layanan != null){
                $result_layanan = [
                    'harga' => $j_layanan->harga
                ];
            }
            if($j_teks != null){
                $result_teks = [
                    'harga' => $j_teks->harga
                ];
            }
            if($jml_karakter != null){
                $result_karakter = [
                    'harga' => $jml_karakter->harga
                ];
            }

            $result[] = [
                'j_layanan' => $result_layanan,
                'j_teks'=>$result_teks,
                'jml_karakter'=>$result_karakter
            ];
        }

        $harga = ($result_layanan['harga']) + ($result_teks['harga']) + ($result_karakter['harga']);
        
        $save_harga = Order::where('id_order', $order->id_order)
                            ->update([
                                'harga'=>$harga
                            ]);
        // return ($save_harga);

        return view('pages.klien.order.order_teks.show_transaksi_perorder', compact('order', 'save_harga'));
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

    public function update(Request $request, $id_order)
    {
        //dd($order);
        
        $this->validate($request, [
            'id_parameter_jenis_layanan' => 'required',
            'id_parameter_jenis_teks' => 'required',
            'durasi_pengerjaan' => 'required',
            'text' => 'required',
            'jumlah_karakter' => 'required',
        ]);

        // $order=Order::find($id_order);
        $order=Order::findOrFail($id_order);

        Order::where('id_order', $id_order)
            ->update([
                'id_parameter_jenis_layanan'=>$request->id_parameter_jenis_layanan,
                'id_parameter_jenis_teks'=>$request->id_parameter_jenis_teks,
                'durasi_pengerjaan'=>$request->durasi_pengerjaan,
                'text'=>$request->text,
                'jumlah_karakter'=>$request->jumlah_karakter,
            ]);
        //return($order);
        //dd($order);

        return redirect(route('order-teks.show', $id_order))->with('success', 'Berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function destroy($id_order)
    {
        Order::destroy($id_order);
        return redirect(route('order-teks.index'))->with('success','Order berhasil di hapus');

    }
}
