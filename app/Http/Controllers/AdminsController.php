<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $admins = Admins::all();
        return view('admin.admins.admins', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.add-admin');
    }

    public function store()
    {
        $datos = request()->validate([
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $admins = Admins::create([
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            ]);

        return view('admin.admins.admins-success');
    }
    
    public function edit($id)
    {
        $admin = Admins::find($id);
        return view('admin.admins.edit-admin', compact('admin'));
    }

    public function update($id)
    {
        $admin = Admins::find($id);
        $datos = request()->validate([
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X]).*$/',
        ]);

        $admin->update($datos);

        return redirect('admin/admins')->with('status', 'Administrador Actualizado');
    }

    public function destroy($id)
    {
    	$admin = Admins::find($id);
        $admin->delete();
    	return redirect('admin/admins')->with('status', 'Administrador Eliminado');
    }

}
