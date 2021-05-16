<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Harga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HargaTranskripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transkrip = DB::table('parameter_order')->whereNotNull('p_durasi_pertemuan')
        ->get();
        return view('pages.admin.HargaTranskrip', ['transkrip' => $transkrip]);
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
            'p_durasi_pertemuan' => 'required',
            'harga' => 'required|integer'
        ]);

        Harga::create([
            'p_durasi_pertemuan' => $request->p_durasi_pertemuan,
            'harga' => $request->harga
        ]);

        return redirect('/daftar-harga-transkrip')->with('success', 'Harga baru berhasil ditambahkan');
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
            'p_durasi_pertemuan' => 'required',
            'harga' => 'required|integer'
        ]);

        $harga = Harga::find($id_parameter_order);
        
        Harga::where('id_parameter_order', $harga->id_parameter_order)
                    ->update([
                        'p_durasi_pertemuan' => $request->p_durasi_pertemuan,
                        'harga' => $request->harga
                    ]);
        return redirect('/daftar-harga-transkrip')->with('success', 'Data harga berhasil diubah');
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
        return redirect('/daftar-harga-transkrip')->with('success', 'Data harga berhasil dihapus');
    }
}
