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
        'durasi_video',
        'jumlah_dubber',
        'durasi_pertemuan',
        'jumlah_karakter',
        'jumlah_halaman',
        'jenis_layanan',
        'harga'
    ];

    public function order(){
        return $this->hasMany('App\Order');
    }
}
