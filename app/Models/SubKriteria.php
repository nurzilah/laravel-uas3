<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kriteria',
        'nama_kriteria',
        'nama_subkriteria',
        'bobot',
        'atribut',
    ];
}