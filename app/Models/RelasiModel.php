<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_relasi';
    protected $table = 'relasi';
    protected $fillable = [
        'id_penyakit',
        'id_gejala',
        'mb',
        'md',
        'cf'
    ];

    public function penyakit()
    {
        return $this->belongsTo(PenyakitModel::class, 'id_penyakit');
    }

    // Definisikan relasi dengan model Gejala
    public function gejala()
    {
        return $this->belongsTo(GejalaModel::class, 'id_gejala');
    }
}
