<?php


namespace App\Models;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klien extends Model
{
    use HasFactory;
    protected $table = 'klien';
    protected $primaryKey = 'id_klien';

    protected $fillable = [
        'id',
        'nik',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kode_pos',
        'tgl_lahir',
        'jenis_kelamin',
        'no_telp',
        'foto_ktp'
    ];

    public function order(){
        return $this->belongsTo('App\Models\Order', 'id_klien', 'id_klien');
    }

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
