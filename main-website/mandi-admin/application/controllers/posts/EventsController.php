<?php

class EventsController extends CI_Controller
{
	public $error, $data, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->error = [];
    }

    public function index()
    {
        $this->load->admin_dashboard('events/home', $this->data);
    }
}
