<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CFUserModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cf_user';
    protected $fillable = [
        'nama_nilai',
        'cf',
    ];
}
