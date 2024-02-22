<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        echo "<h1>Hello Wida dari controller melalui root</h1>";
    }

    public function hello_view()
    {
        return view('hellocontroller');
    }
}

