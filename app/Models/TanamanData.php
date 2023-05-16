<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanamanData extends Model
{
    use HasFactory;
    protected $table = 'tanaman_datas';

    protected $fillable = [
        'nama_tanaman',
        'deskripsi_tanaman',
        'kelembapan',
        'intensitas_penyinaran'
    ];
}
