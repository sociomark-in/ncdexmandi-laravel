<?php

namespace App\Http\Controllers\core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    protected $site_settings;

    public function __construct()
    {
        // Fetch the Site Settings object
        $this->site_settings = Setting::all();
        View::shared('SITE_SETTINGS', $this->site_settings);
    }
}
