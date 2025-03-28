<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index(){
        return view('episodes.home');
    }
}
