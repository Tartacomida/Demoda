<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function create() {

        return view('auth.register');

    }

    public function store(Request $request) {
        $user = User::create($request->only(['username','password']));
        auth()->login($user);
        return redirect()->to('/home');
    }


}