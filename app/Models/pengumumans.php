<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumumans extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $primaryKey = 'id_pengumuman';

    public function gelombang()
    {
        return $this->belongsTo(gelombang_pembayarans::class, 'id_gelombang', 'id_gelombang');
    }
}
