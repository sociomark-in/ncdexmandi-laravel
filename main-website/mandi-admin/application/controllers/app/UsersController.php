<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/My_Controller.php";

class UsersController extends My_Controller
{
    public $error, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('AccessModel');
        $this->error = [];
    }

    public function index()
    {
        $users = $this->UserModel->get();
        $this->load->admin_dashboard('users/home', $this->data);
    }

    public function new_user()
    {
        $this->load->admin_dashboard('users/new', $this->data);
    }

    public function my_profile()
    {
        if ($this->_access_granted_(['read'])) {
            $this->load->admin_dashboard('users/profile', $this->data);
        } else {
            $this->load->admin_dashboard('no_access', $this->data);
        }
    }
}
