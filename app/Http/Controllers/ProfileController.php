<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/exito';

    public function show()
    {
        // Get the currently authenticated user's ID...
        $id = Auth::id();
        $datos = request()->user();
        return view('users.profile', compact('id','datos'));
    }

    public function edit()
    {
        $id = Auth::id();
        $profile = User::find($id);
        return view('users.edit-profile', compact('profile'));
        // {{Auth::id()}}
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $profile = User::find($id);

        request()->validate([
            'first_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'last_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
            'dni' => 'integer|digits_between:7,9',
            'birthday' => 'date',
            'phone' => 'nullable|integer|digits_between:8,13',
            'picture' => 'image|max:2000',

        ]);

        // $first_name = (!Input::get('first_name')) ? $profile->first_name : $request->first_name; 
        // $last_name = (!Input::get('last_name')) ? $profile->last_name : $request->last_name; 
        // $email = (!Input::get('email')) ? $profile->email : $request->email; 
        // $password = (!Input::get('password')) ? $profile->password : $request->password;
        // $password_confirmation = (!Input::get('password_confirmation')) ? $profile->password_confirmation : $request->password_confirmation;
        // $dni =  (!Input::get('dni')) ? $profile->dni : $request->dni;
        // $birthday = (!Input::get('birthday')) ? $profile->birthday : $request->birthday;
        // $phone = (!Input::get('phone')) ? $profile->phone : $request->phone;
        
        if (request()->file('picture')) {
            $ext = request()->file('picture')->extension();
            $nombre = str_slug(request()->input('name'));
            $nombre = request()->file('picture')->storeAs('products', $nombre.'.'.$ext);
            $nombre = 'storage/'.$nombre;

            $datos['picture'] = $nombre;
        }
        $datos = request()->all();

        $profile->update($datos);
        return redirect('profile')->with('status', 'Usuario Actualizado');
    
    }

}
