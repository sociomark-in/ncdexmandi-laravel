<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function publications(){
        return view('theme02.infographics.publications.home');
    }
    public function gallery(){
        return view('theme02.infographics.gallery');
    }
}
