<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view_status_jawban_pesertas_by_subyek_rangking extends Model
{
    use HasFactory;

    protected $table = 'view_status_jawban_pesertas_by_subyek_rangking';

    public function subyeks()
    {
        return $this->belongsTo(subyeks::class, 'id_subyek', 'id_subyek');
    }

    public function pesertas()
    {
        return $this->belongsTo(pesertas::class, 'id_peserta', 'id_peserta');
    }
}
