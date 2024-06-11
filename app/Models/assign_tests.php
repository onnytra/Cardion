<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_tests extends Model
{
    use HasFactory;

    protected $table = 'assign_tests';
    protected $primaryKey = 'id_assign_test';

    public function ujian()
    {
        return $this->belongsTo(ujians::class, 'id_ujian', 'id_ujian');
    }

    public function peserta()
    {
        return $this->belongsTo(pesertas::class, 'id_peserta', 'id_peserta');
    }

    public function pengumpulan_karya()
    {
        return $this->belongsTo(pengumpulan_karyas::class, 'id_pengumpulan', 'id_pengumpulan');   
    }
}
