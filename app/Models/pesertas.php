<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesertas extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id_peserta';

    public function cabangs()
    {
        return $this->belongsTo(cabangs::class, 'id_cabang', 'id_cabang');
    }
    public function rayons()
    {
        return $this->belongsTo(rayons::class, 'id_rayon', 'id_rayon');
    }
}
