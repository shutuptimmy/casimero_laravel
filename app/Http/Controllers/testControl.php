<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testControl extends Controller
{
    public function test() {
        return view('test');
    }
}
