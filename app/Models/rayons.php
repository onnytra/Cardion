<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rayons extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_rayon';

    public function cabang()
    {
        return $this->belongsTo(cabangs::class, 'id_cabang', 'id_cabang');
    }
    public function peserta()
    {
        return $this->hasMany(pesertas::class, 'id_rayon', 'id_rayon');
    }
}
