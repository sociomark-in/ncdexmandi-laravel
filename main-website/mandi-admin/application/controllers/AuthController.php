<?php

class AuthController extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }

    public function logout() {
        $this->data = [
			'page' => [
				'title' => "Login Page" . " • " . APP_NAME
			]
		];
		$this->load->mini_layout('pages/login', $this->data);
    }
}
