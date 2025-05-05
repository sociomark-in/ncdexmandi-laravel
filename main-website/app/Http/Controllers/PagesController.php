<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function index(){
        return view('theme02.pages.home', $this->data);
    }
    public function about(){
        return view('theme02.pages.about', $this->data);
    }
    public function episodes(){
        return view('theme02.pages.episodes', $this->data);
    }
    public function contact(){
        return view('theme02.pages.contact', $this->data);
    }

    public function member_single($name){
        switch ($name) {
            case 'value':
                # code...
                break;

                default:
                return view('theme02.team.member', $this->data);
                # code...
                break;
        }
    }
}
