<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";
class EventsController extends MY_Controller
{
	public $error, $request, $response;

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
