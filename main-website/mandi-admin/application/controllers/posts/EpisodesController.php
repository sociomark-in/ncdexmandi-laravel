<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/My_Controller.php";
class EpisodesController extends My_Controller
{
    public $error, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('content/CategoriesModel');
        $this->load->model('content/TagsModel');
        $this->load->model('data/FPOsModel');
        $this->load->model('UserModel');
        $this->error = [];
    }

    public function index()
    {
        $this->load->admin_dashboard('episodes/home', $this->data);
    }
    public function new_post()
    {
        $this->data['authors'] = $this->UserModel->get(null, ['id', 'name']);
        $this->data['categories'] = $this->CategoriesModel->get(null, ['id', 'name']);
        $this->load->admin_dashboard('episodes/new', $this->data);
    }

    public function view_post($post_id)
    {
        $request = $this->input->get();
        if ($request['post_preview']) {
            $this->load->admin_dashboard('episodes/preview', $this->data);
        } else {
            redirect();
        }
    }

    /* API Routes Handlers */

    public function api_new_post()
    {
        $this->request = [
            'post_title' => $this->input->post('post_title'),
            'post_content' => $this->input->post('post_content'),
            'post_except' => $this->input->post('post_except'),
            'seo_title' => $this->input->post('seo')['title'],
            'seo_description' => $this->input->post('seo')['description'],
            'seo_slug' => $this->input->post('seo')['slug'],
            'status' => $this->input->post('status'),
            'post_author' => $this->input->post('post_author'),
            'post_category' => $this->input->post('post_category'),
            'lang' => $this->input->post('lang'),
            'post_tags' => json_encode($this->input->post('post_tags')),
        ];

        if (!file_exists(FILE_UPLOAD_PATH)) {
            mkdir(FILE_UPLOAD_PATH, 0777, true);
        }

        echo "<pre>";
        print_r($this->request);
        print_r($_FILES);
        die;

        $config['upload_path']          =  FILE_UPLOAD_PATH;
        $config['allowed_types']        = 'jpeg|jpg';
        $new_name = time() . "_" . $_FILES["post_image"]['name'];
        $config['file_name'] = $new_name;


        $this->load->library('upload', $config);
        $this->load->helper('image');

        if ($this->upload->do_upload('post_image')) {
            $t = resize_image($this->upload->data('file_name'), $this->upload->data('file_path'), 200);
            $i = resize_image($this->upload->data('file_name'), $this->upload->data('file_path'), 580);
            if ($i && $t) {
                $this->request['post_thumb'] = $t;
                $this->request['post_image'] = $i;
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
