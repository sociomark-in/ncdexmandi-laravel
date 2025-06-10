<?php

class AuthController extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('AccessModel');
        if (isset($_SESSION['active_user'])) {
            $this->data['active_user'] = $_SESSION['active_user'];
        }
    }

    public function api_login($version = "v2")
    {
        $this->request = $this->input->post();
        $session = $this->UserModel->authorize($this->request);
        $session['role'] = $this->AccessModel->get(['id' => $session['role']]);
        $this->session->set_userdata('active_user', $session);
        redirect('');
    }

    public function login()
    {
        $data = [
            'page' => [
                'title' => "Login Page" . " • " . APP_NAME
            ]
        ];
        $this->load->mini_layout('pages/login', $data);
    }
    public function register()
    {
        $formdata = $this->input->post();
    }

    public function logout()
    {
        $this->data = [
            'page' => [
                'title' => "Logout Page" . " • " . APP_NAME
            ]
        ];
        $this->load->mini_layout('pages/logout', $this->data);
    }
}
