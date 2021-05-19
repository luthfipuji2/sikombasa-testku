<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Order as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class ParameterOrder extends Model
{
    protected $table = 'parameter_order';
    protected $primaryKey = 'id_parameter_order';

    protected $fillable = [
        'p_durasi_video',
        'p_jumlah_dubber',
        'p_durasi_pertemuan',
        'p_jumlah_karakter',
        'p_jumlah_halaman',
        'p_jenis_layanan',
        'harga'
    ];

    public function order(){
        return $this->hasMany('App\Order');
    }
}
