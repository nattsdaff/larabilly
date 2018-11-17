<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminIndexController extends Controller
{
    public function show()
    {
        return view('admin.index');
    }
}
