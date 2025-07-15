<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";
class ReportsController extends MY_Controller
{
    public $error, $request, $response;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}

    public function index()
    {
        $this->load->admin_dashboard('reports/home', $this->data);
    }

    public function new_post()
    {
        $this->load->admin_dashboard('reports/new', $this->data);
    }

    public function view_post($post_id)
    {
        $request = $this->input->get();
        if ($request['post_preview']) {
            $this->load->admin_dashboard('reports/preview', $this->data);
        } else {
            redirect();
        }
    }

    /* API Routes Handlers */

    public function api_new_post()
    {
        $this->request = $this->input->post();
        echo "<pre>";
        print_r($this->request);
    }
}
