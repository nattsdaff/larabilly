<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Administrator;

class AdministratorController extends Controller
{
    public function index()
    {
        $admins = Administrator::all();
        return view('admin.admins.admins', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.add-admin');
    }

    public function store()
    {
        $datos = request()->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $admins = Administrator::create([
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            ]);

        return view('admin.admins.admins-success');
    }
    
    public function edit($id)
    {
        $admin = Administrator::find($id);
        return view('admin.admins.edit-admin', compact('admin'));
    }

    public function update($id)
    {
        $admin = Administrator::find($id);
        $datos = request()->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $admin->update($datos);

        return redirect('admin/admins')->with('status', 'Administrador Actualizado');
    }

    public function destroy($id)
    {
    	$admin = Administrator::find($id);
        $admin->delete();
    	return redirect('admin/admins')->with('status', 'Administrador Eliminado');
    }

}
