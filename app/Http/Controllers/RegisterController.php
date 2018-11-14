<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function store()
    {
        //validar
        request()->validate([
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required|string|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'last_name' => 'required|string|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'password' => 'required|string|min:6|confirmed',
            'birthdate' => 'required|date',
            'phone' => 'integer|digits_between:8,13|nullable',
            'dni' => 'integer|digits_between:7,9|nullable',
        ]);
    
        $datos = request()->all();
        $datos['password'] = Hash::make(request()->input('password'));
        $user = User::create($datos);
        return redirect('login');
    }
}
