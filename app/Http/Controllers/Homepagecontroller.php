<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepagecontroller extends Controller
{
    public function create(){
        return view('pages.homepage');
    }
}
