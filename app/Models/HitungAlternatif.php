<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HitungAlternatif extends Model
{
    use HasFactory;

    protected $table = 'hitung_alternatif';
    protected $fillable = [
        'kode_asuransi',
        'nama_asuransi',
        'C1',
        'C2',
        'C3',
        'C4',
        'C5'
    ];
}

