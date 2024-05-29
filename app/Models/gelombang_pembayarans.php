<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gelombang_pembayarans extends Model
{
    use HasFactory;

    protected $table = 'gelombang_pembayarans';
    protected $guarded = [''];
    protected $primaryKey = 'id_gelombang';

    public function pengumuman()
    {
        return $this->hasMany(pengumumans::class, 'id_gelombang', 'id_gelombang');
    }
}
