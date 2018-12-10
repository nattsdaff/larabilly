<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/exito';

    public function edit($id)
    {
        $profile = User::find($id);
        return view('profile', compact('profile'));
    }

    public function update($id)
    {
        $profile = User::find($id);
        $data = request()->all();
        dd($data);
        return $return;
    }

}
