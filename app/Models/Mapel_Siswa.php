<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel_Siswa extends Model
{
    use HasFactory;
    protected $table="mapel_siswa";
    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'nilai',
    ];

    

}
