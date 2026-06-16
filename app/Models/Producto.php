<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'nombre', 
    'descripcion', 
    'precio', 
    'stock', 
    'imagen', 
    'categoria_id', 
    'porcentaje_descuento' 
];

    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function reseñas() {
    return $this->hasMany(Reseña::class);
}

public function usuariosFavoritos()
    {
        return $this->belongsToMany(User::class, 'favoritos', 'producto_id', 'user_id')->withTimestamps();
    }
    
}