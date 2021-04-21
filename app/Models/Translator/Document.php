<?php
namespace App\Models\Translator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model{
    use HasFactory;
    protected $table = 'lamaran_kerja';
    protected $primaryKey = 'id_lamaran_kerja';
    protected $fillable = ['id', 
                           'cv', 
                           'ijazah_terakhir', 
                           'portofolio', 
                           'sk_sehat',
                           'skck'];
}
?>