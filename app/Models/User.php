<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Un usuario tiene muchos productos favoritos (Lista de deseos)
    public function favoritos()
    {
        return $this->belongsToMany(Producto::class, 'favoritos', 'user_id', 'producto_id')->withTimestamps();
    }

    // Un usuario tiene muchos pedidos en su historial (Ordenados desde el más nuevo)
    public function pedidos()
    {
        return $this->hasMany(Pedido::class)->orderBy('created_at', 'desc');
    }
}
