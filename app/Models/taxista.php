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
        'placa_id',
        'estado',
        'codigo'
    ];
    public function titulos()
    {
        return $this->hasMany(titulo::class);
    }
    public function livretes()
    {
        return $this->hasMany(livrete::class);
    }

    public function placa()
    {
        return $this->belongsTo(Placa::class);
    }
}
