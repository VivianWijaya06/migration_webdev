<?php

namespace App\Http\Controllers;

use App\Models\Profile; 
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $profiles = Profile::all(); 
        return view('about', compact('profiles'));
    }
}
