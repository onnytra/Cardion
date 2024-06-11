<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumpulan_karyas extends Model
{
    use HasFactory;

    protected $table = 'pengumpulan_karyas';
    protected $primaryKey = 'id_pengumpulan';

    public function karyas()
    {
        return $this->belongsTo(karyas::class, 'id_karya', 'id_karya');
    }

    public function assign_test()
    {
        return $this->belongsTo(assign_tests::class, 'id_assign_test', 'id_assign_test');
    }
}
