<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'taxista_id',
        'livrete_id',
        'dataemissao',
        'ndetitulo',
    ];
    public function livrete()
    {
        return $this->belongsTo(livrete::class);
    }
    public function taxista()
    {
        return $this->belongsTo(taxista::class);
    }
}
