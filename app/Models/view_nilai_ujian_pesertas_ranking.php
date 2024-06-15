<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view_nilai_ujian_pesertas_ranking extends Model
{
    use HasFactory;

    protected $table = 'view_nilai_ujian_pesertas_ranking';

    public function ujians()
    {
        return $this->belongsTo(ujians::class, 'id_ujian', 'id_ujian');
    }

    public function pesertas()
    {
        return $this->belongsTo(pesertas::class, 'id_peserta', 'id_peserta');
    }
}
