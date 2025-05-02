<?php
require_once APPPATH . "core/My_Controller.php";
class EventsController extends My_Controller
{
	public $error, $data, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->error = [];
        $this->data = ["APP_STORAGE" => $this->APP_STORAGE];
    }

    public function index()
    {
        $this->load->admin_dashboard('events/home', $this->data);
    }
}
