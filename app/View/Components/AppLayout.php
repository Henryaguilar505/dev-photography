<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
         //obtener informacion del unico usario y administrador de la aplicacion
         $user = User::where('id', 1)->first();
        return view('layouts.app', ['user'=> $user]);
    }
}
