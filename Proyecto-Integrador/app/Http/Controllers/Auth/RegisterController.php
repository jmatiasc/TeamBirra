<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellido' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'integer', 'unique:users'],//deberia poner un maximo de 10 0 11 ----> Produce error por alguna razon
            'nickName' => ['required', 'string', 'max:255'],
            'direccion'=>['required', 'string', 'max:255'],
            'telefono'=>['integer'],//deberia poner un maximo ----> Produce error por alguna razon

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
        
            'name' => $data['name'],
            'apellido' =>$data['apellido'],
            'email' => $data['email'],
            'dni' => $data['dni'],
            'nickName' => $data['nickName'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
