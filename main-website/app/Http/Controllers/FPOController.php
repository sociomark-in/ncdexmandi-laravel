<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FPOController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function index(Request $request)
    {
        if (!empty($request->get('state'))) {
            $state = $request->get('state');
            $this->data['state_filter'] = $state;
        } else {
            $this->data['state_filter'] = null;
        }
        return view('theme02.kks.home', $this->data);
    }

    public function single($episode) {
        return view('theme02.kks.single', $this->data);
    }
}
