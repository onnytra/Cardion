<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soals extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_soal';

    public function ujian()
    {
        return $this->belongsTo(ujians::class, 'id_ujian', 'id_ujian');
    }

    public function subyek()
    {
        return $this->belongsTo(subyeks::class, 'id_subyek', 'id_subyek');
    }
}
