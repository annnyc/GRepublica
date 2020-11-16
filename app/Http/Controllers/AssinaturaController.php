<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    public function index()
    {
        return view('assinatura');
    }
}