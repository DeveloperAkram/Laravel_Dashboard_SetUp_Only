<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $name = "Hello, Developer Akram!";
        return view('dashboard', compact('name'));
    }

    public function form(){

    }
}
