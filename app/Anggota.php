<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Anggota extends Model
{
    protected $table = "anggota";
    protected $fillable = [
        'nama', 'kelas', 'agama', 'alamat', 'no_hp',
    ];
}