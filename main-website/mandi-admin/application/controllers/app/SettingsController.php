<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/My_Controller.php";

class SettingsController extends MY_Controller
{
    private $request, $response;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $this->load->admin_dashboard('flows/home', $this->data);
        $this->load->admin_dashboard('settings/home', $this->data);
    }
    public function localization()
    {
        $this->load->admin_dashboard('settings/localization', $this->data);
    }

    /* API Routes Handlers */
    public function api_update_settings($version = "2") {
        $this->request = $this->input->post();
        $data = [
            'website_title' => $this->request['website']['title'],
            'website_url' => $this->request['website']['url'],
            'website_contact_email' => $this->request['website']['contact_email'],
            'lang' => json_encode($this->request['lang']),
            'timezone' => $this->request['timezone_string'],
            'date_format' => $this->request['date_format'],
            'time_format' => $this->request['time_format'],
        ];
        echo "<pre>";
        print_r($data);
    }
}
