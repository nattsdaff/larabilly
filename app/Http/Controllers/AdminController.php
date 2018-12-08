<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $admins = Admin::all();
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
        
        $admins = Admin::create([
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            ]);

        return view('admin.admins.admins-success');
    }
    
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.edit-admin', compact('admin'));
    }

    public function update($id)
    {
        $admin = Admin::find($id);
        $newEmail = request()->email;
        $newPassword = request()->password;

        if(empty($newEmail) && empty($newPassword)){
            return redirect('admin/admins')->with('status', 'Nada que actualizar');
        }else if(empty($newEmail)){
            request()->validate([
                'password' => 'required|min:6|string',
            ]);
            $admin->update(request()->except('email'));
            return redirect('admin/admins')->with('status', 'Administrador Actualizado');
        }else if(empty($newPassword)){
            request()->validate([
                'email' => 'string|email|max:255',
            ]);
            $admin->update(request()->except('password'));
            return redirect('admin/admins')->with('status', 'Administrador Actualizado');
        }else{
            $newData = request()->validate([
                'email' => 'required|string|email|max:255',
                'password' => 'required|min:6|string',
            ]);    
            $admin->update($newData);
        }
    }
    // public function update($id)
    // {
    //     $admin = Admin::find($id);
    //     $datos = request()->validate([
    //         'email' => 'required|string|email|max:255',
    //         'password' => 'required|min:6|string',
    //     ]);

    //     $admin->update($datos);

    //     return redirect('admin/admins')->with('status', 'Administrador Actualizado');
    // }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        if ($admin->id!=1) {
            $admin->delete();
        }else{
            abort(403, 'Unauthorized action.');
        }
    	return redirect('admin/admins')->with('status', 'Administrador Eliminado');
    }

}
