<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQsController extends Controller
{
    private $data;
    public function index(){
        $this->data = [
            'slug' => str()->random(10)
        ];
        return view('theme02.faqs.home', $this->data);
    }
}
