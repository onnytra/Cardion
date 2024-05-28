<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ujians extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_ujian';

    public function soal()
    {
        return $this->hasMany(soals::class, 'id_ujian', 'id_ujian');
    }

    public function sesi()
    {
        return $this->hasMany(sesis::class, 'id_ujian', 'id_ujian');
    }
}
