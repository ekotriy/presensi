<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
    //
    public function index($var = null)
    {
        return redirect()->action([PresencesController::class, 'index']);
    }
}
