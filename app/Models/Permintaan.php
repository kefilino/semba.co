<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $casts = [
        'status' => 'boolean'
    ];

    protected $fillable = [
        'id_permintaan',
        'kk',
        'id_bantuan',
        'status'
    ];
}
