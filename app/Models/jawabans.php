<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawabans extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_jawaban';

    public function soal()
    {
        return $this->belongsTo(soals::class, 'id_soal', 'id_soal');
    }
}
