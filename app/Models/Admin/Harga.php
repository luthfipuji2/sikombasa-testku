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
        'durasi_file',
        'jumlah_dubber',
        'durasi_pertemuan',
        'jumlah_karakter',
        'jumlah_halaman',
        'jenis_layanan',
        'harga'
    ];
}
