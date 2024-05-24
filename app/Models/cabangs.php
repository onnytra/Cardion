<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cabangs extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_cabang';

    public function rayon()
    {
        return $this->hasMany(rayons::class, 'id_cabang', 'id_cabang');
    }
    public function peserta()
    {
        return $this->hasMany(pesertas::class, 'id_cabang', 'id_cabang');
    }
}
