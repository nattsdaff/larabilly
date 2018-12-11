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

        
        $first_name = (!Input::get('first_name')) ? $profile->first_name : $request->validate(['first_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']);
        $last_name = (!Input::get('last_name')) ? $profile->last_name : $request->validate(['last_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']);
        $email = (!Input::get('email')) ? $profile->email : $request->validate(['email' => 'string|email|max:255|unique:users',]);
        $password = (!Input::get('password')) ? $profile->password : Hash::make($request->validate(['password' => 'string|min:6|confirmed']));
        $password_confirmation = (!Input::get('password_confirmation')) ? $profile->password_confirmation : $request->password_confirmation;
        $dni =  (!Input::get('dni')) ? $profile->dni : $request->validate(['dni' => 'integer|digits_between:7,9']);
        $birthday = (!Input::get('birthday')) ? $profile->birthday : $request->validate(['birthday' => 'date']);
        $phone = (!Input::get('phone')) ? $profile->phone : $request->validate(['phone' => 'nullable|integer|digits_between:8,13']);
        
        $newData = [$first_name, $last_name, $email, $password, $birthday, $phone, $dni];
        dd($newData);

        $profile->update($newData);
        return redirect('profile')->with('status', 'Usuario Actualizado');
    
    }

}
