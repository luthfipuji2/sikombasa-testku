<?php

namespace App\Http\Controllers\Klien;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Admin\ParameterJenisLayanan;
use App\Models\Admin\ParameterJenisTeks;
use App\Models\Admin\ParameterOrderSubtitle;
use App\Models\Klien\Order;
use App\Models\Klien\Klien;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class OrderSubtitleController extends Controller
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
        return view('pages.klien.order.order_subtitle.index', compact('menu', 'jenis_layanan'));
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
    public function store(Request $request, Order $order_subtitle)
    {
        $jenis_layanan=ParameterJenisLayanan::all();
        $jenis_teks = ParameterJenisTeks::all();
        $tgl_order=Carbon::now();
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $harga_video=$request->durasi_video;

        // return ($harga_video);
        // exit();

        if($harga_video >= 1 && $harga_video <= 100)
        {
            // $harga=ParameterOrderTeks::select('id_parameter_order_teks')->first();
            $hasil = "1";
        }elseif($harga_video >= 101 && $harga_video <= 200){
            $hasil = "2";
        }elseif($harga_video >= 201 && $harga_video <= 300){
            $hasil = "3";
        }elseif($harga_video >= 301 && $harga_video <= 400){
            $hasil = "4";
        }elseif($harga_video >= 401 && $harga_video <= 500){
            $hasil = "5";
        }elseif($harga_video >= 501 && $harga_video <= 600){
            $hasil = "6";
        }elseif($harga_video >= 601 && $harga_video <= 700){
            $hasil = "7";
        }elseif($harga_video >= 701 && $harga_video <= 800){
            $hasil = "8";
        }elseif($harga_video >= 801 && $harga_video <= 900){
            $hasil = "9";
        }elseif($harga_video >= 901 && $harga_video <= 1000){
            $hasil = "10";
        }

        //return($request);
        if($request->hasFile('path_file')){
            $validate_data = $request->validate([
                'id_parameter_jenis_layanan'=>'required',
                'durasi_pengerjaan'=>'required',
                'nama_dokumen'=>'required',
                'path_file'=>'required|file|max:10000',
                'durasi_video'=>'required',
            ]);
        

            $id_parameter_jenis_layanan = $validate_data['id_parameter_jenis_layanan'];
            $durasi = $validate_data['durasi_pengerjaan'];
            $durasi_video = $validate_data['durasi_video'];
            $ext_template = $validate_data['path_file']->extension();
            $size_template = $validate_data['path_file']->getSize();
            $user=Auth::user();
            $klien=Klien::where('id', $user->id)->first();
            $nama_dokumen = $validate_data['nama_dokumen'] . "." . $ext_template;

            $path_template = Storage::putFileAs('public/data_video/file_order_video', $request->file('path_file'), $nama_dokumen);

            $order_subtitle=Order::create([
                'id_klien'=>$klien->id_klien,
                'id_parameter_jenis_layanan'=>$id_parameter_jenis_layanan,
                'id_parameter_order_subtitle'=>$hasil,
                'durasi_pengerjaan'=>$durasi,
                'nama_dokumen'=>$nama_dokumen,
                'path_file'=>$path_template,
                'durasi_video'=>$durasi_video,
                'ekstensi'=>$ext_template,
                'size'=>$size_template,
                'tgl_order'=>Carbon::now()->timestamp,
                'is_status'=>'belum dibayar',
            ]);


            $id_order=$order_subtitle->id_order;
            return redirect(route('order-subtitle.show', $id_order))->with('success', 'Berhasil di upload!');
        }
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
        $jenis_layanan=ParameterJenisLayanan::all();
        $klien=Klien::where('id', $user->id)->first();

        $order=Order::findOrFail($id_order);
       // return ($order);
        return view('pages.klien.order.order_subtitle.show', compact('order', 'user', 'klien', 'jenis_layanan'));
    }

    public function showTransaksiSub($id_order, $status)
    {
        
        $i = 0;
        $result = [];
        $user=Auth::user();
        $klien=Klien::where('id', $user->id)->first();
        $order=Order::findOrFail($id_order); //dapat id order
        // return ($order);
        if($order != null){
            $j_layanan = ParameterJenisLayanan::where('id_parameter_jenis_layanan', $order->id_parameter_jenis_layanan)->first();
            $dr_video = ParameterOrderSubtitle::where('id_parameter_order_subtitle', $order->id_parameter_order_subtitle)->first();
    
            if($j_layanan != null){
                $result_layanan = [
                    'harga' => $j_layanan->harga
                ];
            }

            if($dr_video != null){
                $result_video = [
                    'harga' => $dr_video->harga
                ];
            }

            $result[] = [
                'j_layanan' => $result_layanan,
                'dr_video'=>$result_video
            ];
        }

        $harga = ($result_layanan['harga']) + ($result_video['harga']);
        
        $save_harga = Order::where('id_order', $order->id_order)
                            ->update([
                                'harga'=>$harga
                            ]);
        // return ($save_harga);

        return view('pages.klien.order.order_subtitle.show_transaksi_perorder', compact('order', 'save_harga'));
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
    public function update(Request $request, $id_order)
    {
        $this->validate($request, [
            'id_parameter_jenis_layanan' => 'required',
            'durasi_pengerjaan' => 'required',
            'nama_dokumen' => 'required',
            'path_file' => 'required',
            'durasi_video' => 'required',
        ]);

        $order=Order::findOrFail($id_order);

        Order::where('id_order', $id_order)
            ->update([
                'id_parameter_jenis_layanan'=>$request->id_parameter_jenis_layanan,
                'durasi_pengerjaan'=>$request->durasi_pengerjaan,
                'nama_dokumen'=>$request->nama_dokumen,
                'path_file'=>$request->path_file,
                'durasi_video'=>$request->durasi_video,
            ]);
        //return($order);
        //dd($order);

        return redirect(route('order-subtitle.show', $id_order))->with('success', 'Berhasil di update!');
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
        return redirect(route('order-subtitle.index'))->with('success','Order berhasil di hapus');
    }
}
