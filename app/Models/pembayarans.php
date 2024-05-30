<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayarans extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran';
    
    protected $guarded = [];

    public function gelombang_pembayarans()
    {
        return $this->belongsTo(gelombang_pembayarans::class, 'id_gelombang');
    }

    public function pesertas()
    {
        return $this->hasMany(pesertas::class, 'id_pembayaran');
    }
}
