<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        // verifica se o usuario está logado ou não no sistema
        if(Auth::check()){ 
            return view('home');
        }

        return redirect("/");
    }
}


