<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inventariocontroller extends Controller
{
    public function create(){
        return view('pages.inventario');
    }
}
