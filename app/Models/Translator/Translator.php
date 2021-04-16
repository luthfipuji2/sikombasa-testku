<?php
namespace App\Models\Translator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translator extends Model{
    protected $table = 'translator';
    protected $primaryKey = 'id_translator';
    protected $fillable = ['id',
                           'nik', 
                           'keahlian', 
                           'alamat', 
                           'provinsi', 
                           'kabupaten', 
                           'kecamatan', 
                           'kode_pos', 
                           'nama_bank', 
                           'nama_rekening', 
                           'rekening_bank', 
                           'tgl_lahir', 
                           'jenis_kelamin', 
                           'no_telp', 
                           'foto_ktp'];
}
?>