<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/My_Controller.php";
class BlogsController extends My_Controller
{
    public $error, $request, $response;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}

    public function index()
    {
        $this->load->admin_dashboard('blogs/home', $this->data);
    }
    public function new_post()
    {
        $this->load->admin_dashboard('blogs/new', $this->data);
    }

    public function view_post($post_id)
    {
        $request = $this->input->get();
        if ($request['post_preview']) {
            $this->load->admin_dashboard('blogs/preview', $this->data);
        } else {
            redirect();
        }
    }

    /* API Routes Handlers */

    public function api_new_post()
    {
        $this->request = $this->input->post();

        if (!file_exists(FILE_UPLOAD_PATH)) {
            mkdir(FILE_UPLOAD_PATH, 0777, true);
        }

        $config['upload_path']          =  FILE_UPLOAD_PATH;
        $config['allowed_types']        = 'jpeg|jpg';
        $new_name = time() . "_" . $_FILES["post_image"]['name'];
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $this->load->helper('image');

        if ($this->upload->do_upload('post_image')) {
            if (
                resize_image($this->upload->data('file_name'), $this->upload->data('file_path'), 200) &&
                resize_image($this->upload->data('file_name'), $this->upload->data('file_path'), 580)) {
                echo "<pre>";
                print_r($this->request);
                print_r($_FILES);
            }
        } else {
            echo "<pre>";
            print_r($this->request);
        }
    }
}
