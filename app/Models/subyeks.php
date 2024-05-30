<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subyeks extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_subyek';

    public function soal()
    {
        return $this->hasMany(soals::class, 'id_subyek', 'id_subyek');
    }
}
