<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    protected $fillable = ['producto_id', 'user_id', 'estrellas', 'comentario'];

public function user() {
    return $this->belongsTo(User::class);
}
}
