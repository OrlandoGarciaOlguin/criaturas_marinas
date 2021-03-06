<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';

    protected $fillable = [
            'nombre' ,
            'id_pais' ,
            'id_tipo' ,
    ];
  

    public function tipo()
    {
        return $this->hasMany(Criaturas::class, 'id', 'tipo');
    }
}
