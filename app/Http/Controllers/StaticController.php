<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public static function faq()
    {
        return view('preguntas-frecuentes');
    }
    public static function index()
    {
        return view('index');
    }
}
