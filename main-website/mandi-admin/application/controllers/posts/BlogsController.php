<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogsController extends CI_Controller
{
	public $error, $data;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}

    public function index(){
        $this->load->admin_dashboard('blogs/home', $this->data);
    }

}
