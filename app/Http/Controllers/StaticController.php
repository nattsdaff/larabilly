<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public static function exito()
    {
        return view('exito');
    }
    public static function faq()
    {
        return view('preguntas-frecuentes');
    }
    public function index()
    {
        return view('index');
    }
}
