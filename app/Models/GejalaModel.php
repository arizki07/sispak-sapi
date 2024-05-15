<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GejalaModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_gejala';
    protected $table = 'gejala';
    protected $fillable = [
        'kode_gejala',
        'nama_gejala',
    ];
}
