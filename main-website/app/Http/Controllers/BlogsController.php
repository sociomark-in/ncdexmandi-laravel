<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    private $data;
    public function index(){
        $this->data = [
            'slug' => str()->random(10)
        ];
        return view('theme02.blogs.home', $this->data);
    }
    public function search(){
        $this->data = [
            'slug' => str()->random(10)
        ];
        return view('blogs.search', $this->data);
    }
}
