<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama','nim','prodi','pembimbing1','pembimbing2','masaPelaksanaan','judul','pembimbing1Setuju','pembimbing2Setuju','terverifikasi'
    ];
}
