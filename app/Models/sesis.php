<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesis extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_sesi';
    protected $table = 'sesis';

    public function ujian()
    {
        return $this->belongsTo(ujians::class, 'id_ujian', 'id_ujian');
    }
}
