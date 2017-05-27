<?php

namespace moviexpert\Http\Controllers\Auth;

use moviexpert\User;
use Validator;
use moviexpert\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'direccion' => 'required|max:255',
            'localidad' => 'required|max:255',
            'genero' => 'required|max:255',
            'fechanacimiento' => 'required|date',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
          'email'=> $data['email'],
          'password'=> bcrypt($data['password']),
          'nombre'=> $data['nombre'],
          'apellidos'=> $data['apellidos'],
          'direccion'=> $data['direccion'],
          'localidad'=> $data['localidad'],
          'genero'=> $data['genero'],
          'fechanacimiento'=> $data['fechanacimiento'],
          'foto'=>'perfildefecto.png',
          'tipousuario'=> 'normal',

        ]);
    }
}
