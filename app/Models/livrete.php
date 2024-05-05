<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livrete extends Model
{
    use HasFactory;
    protected $fillable = [
    'taxista_id',
    'matricula1',
    'modelo1',
    'marca1',
   'ndemotor1',
   'cor1',
    'medidaspneus',
    'pesobruto',
    'dentreixos',
   'servico',
    'cilindrada',
   'ndequadro1',
   'lotacao',
    'tara',
    'tipodecaixa',
    'combustivel',
    'ndecilindros',
    'dataregistro',
];
public function titulo()
{
    return $this->hasOne(titulo::class);
}
public function taxista()
{
    return $this->belongsTo(taxista::class);
}
}
