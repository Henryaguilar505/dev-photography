<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function home()
    {
        //obtener informacion del unico usario y administrador de la aplicacion
        $user = User::where('id', 1)->first();
        return view('home', ['user'=> $user]);
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
