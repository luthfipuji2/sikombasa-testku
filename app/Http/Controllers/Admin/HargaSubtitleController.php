<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Harga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HargaSubtitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitle = DB::table('parameter_order')->whereNotNull('durasi_file')->get();
        return view('pages.admin.HargaSubtitle', ['subtitle' => $subtitle]);
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
        $this->validate($request,[
            'jenis_layanan' => 'required',
            'durasi_file' => 'required',
            'harga' => 'required'
        ]);

        Harga::create([
            'jenis_layanan' => $request->jenis_layanan,
            'durasi_file' => $request->durasi_file,
            'harga' => $request->harga
        ]);

        return redirect('/daftar-harga-subtitle')->with('success', 'Harga baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id_parameter_order)
    {
        $this->validate($request,[
            'jenis_layanan' => 'required',
            'durasi_file' => 'required',
            'harga' => 'required'
        ]);

        $harga = Harga::find($id_parameter_order);
        
        Harga::where('id_parameter_order', $harga->id_parameter_order)
                    ->update([
                        'jenis_layanan' => $request->jenis_layanan,
                        'durasi_file' => $request->durasi_file,
                        'harga' => $request->harga
                    ]);
        return redirect('/daftar-harga-subtitle')->with('success', 'Data harga berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harga $harga)
    {
        Harga::destroy($harga->id_parameter_order);
        return redirect('/daftar-harga-subtitle')->with('success', 'Data harga berhasil dihapus');
    }
}
