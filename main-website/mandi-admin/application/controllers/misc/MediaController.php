<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";

class MediaController extends MY_Controller
{
    private $request, $response;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->admin_dashboard('media/home', $this->data);
    }
}
