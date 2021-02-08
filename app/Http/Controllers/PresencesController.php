<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresencesController extends Controller
{
    //
    public function index($var = null)
    {
        return view('frontend/dashboard');
    }
}
