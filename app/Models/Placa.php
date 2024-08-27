<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    use HasFactory;
    protected $fillable = [
        'presidente',
        'bipresidente',
        'numpresidente',
        'nome',
        'localizacao',
        'descricao',
    ];

    public function taxistas()
    {
        return $this->hasMany(taxista::class);
    }
}
