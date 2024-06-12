<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pesertas extends Authenticatable
{
    use HasFactory, Notifiable;
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
    public function assign_tests(){
        return $this->hasMany(assign_tests::class, 'id_peserta', 'id_peserta');
    }
    public function pembayarans()
    {
        return $this->hasMany(pembayarans::class, 'id_peserta', 'id_peserta');
    }
}
