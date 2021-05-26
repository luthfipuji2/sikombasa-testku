<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;
    protected $table = 'parameter_order';
    protected $primaryKey = 'id_parameter_order';
    protected $fillable = [
        'p_durasi_file',
        'p_jumlah_dubber',
        'p_durasi_pertemuan',
        'p_jumlah_karakter',
        'p_jumlah_halaman',
        'p_jenis_layanan',
        'harga',
        'p_tipe_transkrip'
    ];
}
