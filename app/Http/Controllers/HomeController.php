<?php

namespace App\Http\Controllers;

use App\Models\Creation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $creations = Creation::all();
        return view('home', compact('creations'));
    }
}
