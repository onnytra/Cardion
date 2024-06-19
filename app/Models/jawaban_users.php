<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban_users extends Model
{
    use HasFactory;

    protected $table = 'jawaban_users';

    public function peserta()
    {
        return $this->belongsTo(pesertas::class, 'id_peserta', 'id_peserta');
    }

    public function soal()
    {
        return $this->belongsTo(soals::class, 'id_soal', 'id_soal');
    }

    public function jawaban()
    {
        return $this->belongsTo(jawabans::class, 'id_jawaban', 'id_jawaban');
    }
}
