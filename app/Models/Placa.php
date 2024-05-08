<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'localizacao',
        'descricao',
    ];

    public function taxista()
{
    return $this->hasMany(titulo::class);
}
}
