<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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


    public function store()
    {
        request()->validate([
            'picture' => 'image|max:2000',
        ]);
        
        $datos = request()->all();

        if (request()->file('picture')) {
            $ext = request()->file('picture')->extension();
            $nombre = str_slug(request()->input('name'));
            $nombre = request()->file('picture')->storeAs('products', $nombre.'.'.$ext);
            $nombre = 'storage/'.$nombre;

            $datos['picture'] = $nombre;
        }

        $product = Product::create($datos);
        
        return view('admin.products.products-success');
    }

    // public function edit($id)
    // {
    //     $profile = User::find($id);
    //     return view('profile', compact('profile'));
    // }

    // public function update($id)
    // {
    //     $profile = User::find($id);
    //     $data = request()->all();
    //     dd($data);
    //     return $return;
    // }

}
