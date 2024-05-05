<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taxista extends Model
{
    use HasFactory;
    protected $fillable = [
    'nome',
    'ndebi',
    'genero',
    'data',
    'numerotelefone',
    'documentos',
];
public function titulo()
{
    return $this->hasMany(titulo::class);
}
public function livrete()
{
    return $this->hasMany(livrete::class);
}

}
