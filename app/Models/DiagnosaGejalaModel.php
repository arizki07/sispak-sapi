<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosaGejalaModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_diagnosa_gejala';
    protected $table = 'diagnosa_gejala';
    protected $fillable = [
        'id_diagnosa',
        'id_gejala',
    ];

    public function gejala()
    {
        return $this->belongsTo(GejalaModel::class, 'id_gejala');
    }
}
