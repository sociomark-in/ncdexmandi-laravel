<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class MY_Controller extends CI_Controller
{
	public $COMPANY_NAME, $APP_ID = "", $IP, $APP_STORAGE, $data, $SESSION;
	public function __construct()
	{
		parent::__construct();
        $this->load->model('UserModel');

		$this->COMPANY_NAME = "Sociomark";
		$this->IP = "114.79.151.88";
		if (!is_https()) {
			$this->session->set_flashdata('http_error', 'Please change url to HTTPS!!');
		}
		$this->APP_ID = get_cookie("app_id", true);
        $this->APP_STORAGE = directory_size(FILE_UPLOAD_FOLDER);

        $this->SESSION = $_SESSION['active_user'];

        if(!isset($this->SESSION)){
            redirect('login');
        } else {
            $this->data['active_user'] = $this->SESSION;
            $this->data["APP_STORAGE"] = $this->APP_STORAGE;
        }
	}
	public function _access_granted_($modules){
        return empty(array_diff($modules, json_decode($this->SESSION['role']['modules'])));
    }
	public function _auth_(){
		$app_id = get_cookie("app_id", true);
		if(( $app_id == null) || ($app_id == "")) {
			redirect(base_url('login')) ;
		} else {
			return $app_id;
		}
	}

	public function get_ip_info(){
		$this->load->model('core/IPLocationModel');
		return $this->IPLocationModel->get($this->IP);
	}

    public function api_new_post()
    {
        $this->request = $this->input->post();
        echo "<pre>";
        print_r($this->request);
    }

    public function add_missing_tags($tags_array){
        $this->load->model('content/TagsModel');
        $final = [];
        foreach ($tags_array as $key => $tag) {
            if(is_numeric($tag)){
                array_push($final, $tag);
            }else {
                $index = $this->TagsModel->insert(['name'=> $tag, 'slug' => slugify($tag)]);
                array_push($final, $index);
            }
        }
        return $final;
    }
}
