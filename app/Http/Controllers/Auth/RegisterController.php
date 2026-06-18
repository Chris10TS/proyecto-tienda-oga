<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
 protected function validator(array $data)
{
    return Validator::make($data, [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'name'  => ['required', 'string', 'max:255', 'regex:/^\S+$/'],
        'telefono' => ['required', 'string', 'max:20'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ], [
        'name.required'     => 'El nombre de usuario es obligatorio.',
        'name.regex'        => 'El nombre de usuario no puede estar compuesto por esapcios vacios.',
        'email.required'    => 'El correo electrónico es obligatorio.',
        'email.email'       => 'Por favor, ingresá un formato de email válido.',
        'email.unique'      => 'Este correo electrónico ya se encuentra registrado.',
        'telefono.required' => 'El teléfono es obligatorio.',
        'password.required' => 'La contraseña es obligatoria.',
        'password.min'      => 'La contraseña debe tener al menos 8 caracteres.',
        'password.confirmed'=> 'Las contraseñas ingresadas no coinciden.',
    ]);
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
