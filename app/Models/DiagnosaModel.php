<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiagnosaModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_diagnosa';
    protected $table = 'diagnosa';
    protected $fillable = [
        'id_penyakit',
        'cf',
        'presentase',
    ];

    public function penyakit()
    {
        return $this->belongsTo(PenyakitModel::class, 'id_penyakit');
    }
}
