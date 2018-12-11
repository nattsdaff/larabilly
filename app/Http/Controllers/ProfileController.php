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
        $datos = request()->user();
        return view('users.edit-profile', compact('profile','datos'));
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $profile = User::find($id);
        
        $datos = [];
        $datos[] = (!Input::get('first_name')) ? ['first_name' => $profile->first_name] : request()->validate(['first_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']);
        $datos[] = (!Input::get('last_name')) ? ['last_name' => $profile->last_name] : request()->validate(['last_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']); 
        
        


        $datos[] = (!Input::get('email')) ? ['email' => $profile->email] : request()->validate(['email' => 'string|email|max:255|unique:users,'.$profile->id]);  


        

        $datos[] = (!Input::get('password')) ? ['password' => $profile->password] : Hash::make($request->validate(['password' => 'string|min:6|confirmed']));
        $datos[] =  (!Input::get('dni')) ?['dni' => $profile->dni] : request()->validate(['dni' => 'integer|digits_between:7,9']); 
        $datos[] = (!Input::get('birthday')) ? ['birthday' => $profile->birthday] : request()->validate(['birthday' => 'nullable|date']); 
        $datos[] = (!Input::get('phone')) ? ['phone' => $profile->phone] : request()->validate(['phone' => 'nullable|integer|digits_between:8,13']);
        $datos = collect($datos);
        $datos = $datos->collapse()->toArray();

        if (request()->file('avatar')) {
            $ext = request()->file('avatar')->extension();
            $id = $profile->id;
            $nombre = request()->file('avatar')->storeAs('avatars', $id.'.'.$ext);
            $nombre = 'storage/'.$nombre;

            $datos['avatar'] = $nombre;
        }

        $profile->update($datos);
        return redirect('profile')->with('status', 'Usuario Actualizado');
    }

}
