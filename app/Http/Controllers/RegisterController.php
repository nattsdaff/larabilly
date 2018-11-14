<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'first_name' => 'required|string|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'last_name' => 'required|string|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthdate' => 'required|date',
            'phone' => 'integer|min:7|max:20',
            'dni' => 'integer|min:7|max:9',
        ])
    }
}
