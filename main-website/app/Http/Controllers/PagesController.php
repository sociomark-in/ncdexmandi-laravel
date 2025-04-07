<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public $data;

    public function index(){
        $page = [
            'title' => "NCDEX"
        ];
        $this->data = [
            "page" => $page
        ];
        return view('theme02.pages.home', $this->data);
    }
    public function about(){
        $page = [
            'title' => "NCDEX"
        ];
        $this->data = [
            "page" => $page
        ];
        return view('theme02.pages.about', $this->data);
    }
    public function events(){
        $page = [
            'title' => "NCDEX"
        ];
        $this->data = [
            "page" => $page
        ];
        return view('theme02.pages.events', $this->data);
    }
    public function contact(){
        $page = [
            'title' => "NCDEX"
        ];
        $this->data = [
            "page" => $page
        ];
        return view('theme02.pages.contact', $this->data);
    }
}
