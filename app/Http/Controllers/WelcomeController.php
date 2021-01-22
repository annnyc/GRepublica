<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        // verifica se o usuario está logado ou não no sistema
        // if(Auth::check()){ 
        //     return view('home');
        // }
        

        // return redirect("/");
        return view('welcome');
    }
}
