<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nome',
        'quantidade',
        'quantidade_minima',
        'icone'
    ];
}