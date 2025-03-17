<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class PageController extends Controller
{
    // public function home() {
    //     $home = Home::all();
    //     return view('pages/home', compact('home'));
    // }

    public function skills() {
        return view('pages/skills');
    }
    
    public function gallery() {
        return view('pages/gallery');
    }
}
