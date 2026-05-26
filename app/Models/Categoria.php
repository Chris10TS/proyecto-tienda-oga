<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre']; 

public function productos()
{
    // Una categoría tiene MUCHOS productos (hasMany) [cite: 165]
    return $this->hasMany(Producto::class);
}
}
