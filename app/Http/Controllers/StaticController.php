<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public static function exito()
    {
        return view('exito');
    }
    public static function store()
    {
        return view('store');
    }
    public static function cart()
    {
        return view('cart');
    }
    public static function faq()
    {
        return view('preguntas-frecuentes');
    }
    public function index()
    {
        return view('index');
    }
    public static function product()
    {
        return view('product');
    }
}
