<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControleur extends Controller
{
    public function show(){
        return view('user');
    }
}
