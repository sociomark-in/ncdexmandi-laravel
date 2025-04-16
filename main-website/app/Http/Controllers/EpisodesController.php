<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data = [];
    }
    
    public function index(){
        return view('theme02.episodes.home', $this->data);
    }
}
