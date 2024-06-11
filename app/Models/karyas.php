<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyas extends Model
{
    use HasFactory;

    protected $table = 'karyas';
    protected $primaryKey = 'id_karya';

    public function pengumpulan_karya()
    {
        return $this->belongsTo(pengumpulan_karyas::class, 'id_pengumpulan', 'id_pengumpulan');
    }

    public function peserta()
    {
        return $this->belongsTo(pesertas::class, 'id_peserta', 'id_peserta');
    }
}
