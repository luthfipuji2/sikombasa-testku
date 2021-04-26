<?php
namespace App\Models\Translator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_keahlian extends Model{
    protected $table = 'master_keahlian';
    protected $primaryKey = 'id_master_keahlian';
    protected $fillable = ['id_translator', 'id_keahlian'];
}
?>