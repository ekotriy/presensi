<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    public function index(Type $var = null)
    {
        return view('frontend/login');

    }

    public function login(Type $var = null)
    {
        return redirect()->action([PresencesController::class, 'index']);
    }
}
