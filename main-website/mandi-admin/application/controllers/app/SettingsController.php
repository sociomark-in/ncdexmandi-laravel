<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsController extends CI_Controller
{
    private $request, $response, $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->admin_dashboard('settings/home');
    }
    public function localization(){
        $this->load->admin_dashboard('settings/localization');
    }
}
