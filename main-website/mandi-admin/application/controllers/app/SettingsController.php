<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";

class SettingsController extends MY_Controller
{
    private $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('app/SettingsModel');
    }

    public function index()
    {
        $result = json_decode($this->SettingsModel->get(), true);

        $settings = [];

        foreach ($result as $key => $row) {
            $settings[$row['config_key']] = $row['config_value'];
        }

        $this->data['settings'] = $settings;
        // $this->load->admin_dashboard('flows/home', $this->data);
        $this->load->admin_dashboard('settings/home', $this->data);
    }
    public function localization()
    {
        $this->load->admin_dashboard('settings/localization', $this->data);
    }

    /* API Routes Handlers */
    public function api_update_settings($version = "2")
    {
        $this->request = $this->input->post();
        $data = [
            "website_name" => $this->request['website']['title'],
            "website_url" => $this->request['website']['url'],
            "mail_client_name" => $this->request['mailservice']['name'],
            "mail_client_address" => $this->request['mailservice']['address'],
            "lang" => json_encode($this->request['lang']),
            "site_language" => $this->request['default_lang'],
            "timezone" => $this->request['timezone_string'],
            "date_format" => $this->request['date_format'],
            "time_format" => $this->request['time_format'],
        ];

        if($data['date_format']['other'][0] == NULL){
            $data['date_format'] = $data['date_format']['default'];
        } else {
            $data['date_format'] = $data['date_format']['other'][0];
        }
        if($data['time_format']['other'][0] == NULL){
            $data['time_format'] = $data['time_format']['default'];
        } else {
            $data['time_format'] = $data['time_format']['other'][0];
        }

        foreach ($data as $key => $entry) {
            $this->SettingsModel->update(
                [
                    "config_value" => $entry
                ],
                [
                    "config_key" => $key
                ]
            );
        }

        redirect('settings');
    }
}
