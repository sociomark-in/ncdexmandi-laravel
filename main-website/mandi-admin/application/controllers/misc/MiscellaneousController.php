<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";

class MiscellaneousController extends CI_Controller
{
    public $error, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('AccessModel');
        $this->error = [];
    }

    public function categories_all()
    {
        $users = $this->UserModel->get();
        for ($i=0; $i < count($users); $i++){
            $users[$i]['role'] = $this->AccessModel->get(['id' => $users[$i]['role']],['id', 'name']);
        }
        $this->data['users'] = $users;
        $this->load->admin_dashboard('users/home', $this->data);
    }
    public function tags_all()
    {
        $users = $this->UserModel->get();
        for ($i=0; $i < count($users); $i++){
            $users[$i]['role'] = $this->AccessModel->get(['id' => $users[$i]['role']],['id', 'name']);
        }
        $this->data['users'] = $users;
        $this->load->admin_dashboard('users/home', $this->data);
    }
}