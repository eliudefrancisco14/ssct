<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livrete extends Model
{
    use HasFactory;
    protected $fillable = [
    'taxista_id',
    'matricula',
    'modelo',
    'ndemotor',
    'servico',
    'documentos',
    'proprietario',
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
