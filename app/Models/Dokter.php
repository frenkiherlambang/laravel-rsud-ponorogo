<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getSpesialisasiAttribute($val)
    {
        return strtoupper($val);
    }

    protected $casts = [
        'mulai_jam_praktek' => 'datetime',
        'akhir_jam_praktek' => 'datetime',
    ];
}
