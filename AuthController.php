<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('layout.login');
    }

    public function other() {
        return view('layout.register');
    }

}

