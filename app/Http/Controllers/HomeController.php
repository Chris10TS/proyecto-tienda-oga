<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 

class HomeController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::all(); 

        return view('home', compact('productos'));
    }
}