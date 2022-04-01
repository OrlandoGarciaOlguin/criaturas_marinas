<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'pais';

    protected $fillable = [
        'Nombre',
    ];

    public function criaturas()
    {
        return $this->hasMany(Pais::class, 'id', 'nombre');
    }
}
