<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public $data;
    public function index(){
        $page = [
            'title' => "NCDEX"
        ];
        $this->data = [
            "page" => $page
        ];
        return view('theme02.episodes.home', $this->data);
    }
}
