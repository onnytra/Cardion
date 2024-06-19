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
        return $this->hasMany(karyas::class, 'id_pengumpulan', 'id_pengumpulan');
    }

    public function assign_tests()
    {
        return $this->hasMany(assign_tests::class, 'id_pengumpulan', 'id_pengumpulan');
    }
}
