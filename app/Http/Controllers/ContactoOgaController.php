<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoOgaController extends Controller
{
    public function procesar(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return view('gracias-contacto', [
            'nombre' => $nombre,
            'email' => $email
        ]);
    }
}