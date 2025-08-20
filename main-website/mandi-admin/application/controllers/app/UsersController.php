<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";

class UsersController extends MY_Controller
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
        for ($i = 0; $i < count($users); $i++) {
            $users[$i]['role'] = $this->AccessModel->get(['id' => $users[$i]['role']], ['id', 'name']);
        }
        $this->data['users'] = $users;
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

    public function api_new_user()
    {
        $this->request = $this->input->post();
        $data = [
            'name' => implode(" ", $this->request['name']) ?? '',
            'email' => $this->request['email'] ?? '',
            'password' => $this->request['password'] ?? '',
            'role' => $this->request['role'] ?? 3,
            'status' => $this->request['status'] ?? 'active',
        ];
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
        if ($this->_access_granted_(['create'])) {
            $this->response = $this->UserModel->create($this->request);
            if ($this->response['status'] == 'success') {
                $this->response['message'] = 'User created successfully.';
            } else {
                $this->response['message'] = 'Failed to create user.';
            }
        } else {
            $this->response = ['status' => 'error', 'message' => 'Access denied.'];
        }
        $this->session->set_flashdata('response', $this->response);
        redirect('users');
    }
}
