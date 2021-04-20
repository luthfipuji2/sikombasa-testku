<?php
namespace App\Models\Translator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model{
    use HasFactory;
    protected $table = 'keahlian';
    protected $primaryKey = 'id_keahlian';
    protected $fillable = ['nama_sertifikat', 
                           'no_sertifikat', 
                           'bukti_dokumen', 
                           'diterbitkan_oleh', 
                           'masa_berlaku'
                            ];
}
?>