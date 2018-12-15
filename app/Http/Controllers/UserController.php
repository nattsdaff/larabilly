<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }

    public function create()
    {
        return view('admin.users.add-user');
    }

    public function store()
    {
        $datos = request()->validate([
            'first_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'last_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'dni' => 'required|numeric|digits_between:7,9|regex:/^\d{7,9}(?:[-\s]\d{4})?$/',
            'birthday' => 'nullable|date',
            'phone' => 'nullable|numeric|digits_between:8,13','regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/'
        ]);
        
        $users = User::create([
            'first_name' => $datos['first_name'],
            'last_name' => $datos['last_name'],
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            'birthday' => $datos['birthday'],
            'phone' => $datos['phone'],
            'dni' => $datos['dni'],
            ]);

        return view('admin.users.users-success');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit-user', compact('user'));
    }

    public function update($id)
    {
        $user = User::find($id);

        request()->validate([
            'first_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'last_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required|string|min:6|confirmed',
            'dni' => 'required|numeric|digits_between:7,9|regex:/^\d{7,9}(?:[-\s]\d{4})?$/|unique:users,dni,'.$user->id,
            'birthday' => 'nullable|date',
            'phone' => 'nullable|numeric|digits_between:8,13','regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/'
        ]);

        $datos = request()->all();
        
        if (!empty(request()->input('password'))) {
            request()->validate(['password' => 'string|min:6|confirmed']);
            $datos["password"] = Hash::make(request()->input('password'));
        } else {
            $datos["password"] = $user->password;
        }

        $user->update($datos);

        return redirect('admin/users')->with('status', 'Usuario Actualizado');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->id!=1) {
            $user->delete();
        }else{
            abort(403, 'Unauthorized action.');
        }
    	return redirect('admin/users')->with('status', 'Usuario Eliminado');
    }

}
