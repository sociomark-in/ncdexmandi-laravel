<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";
class BlogsController extends MY_Controller
{
    public $error, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('content/CategoriesModel');
        $this->load->model('content/TagsModel');
        $this->load->model('data/FPOsModel');
        $this->load->model('content/BlogsModel');
        $this->load->model('UserModel');
        $this->error = [];
    }

    public function index()
    {
        $this->data['authors'] = $this->UserModel->get(null, ['id', 'name']);
        $this->data['categories'] = json_decode($this->CategoriesModel->get(null, ['id', 'name']), true);
        $this->data['tags'] = json_decode($this->TagsModel->get(null, ['id', 'name']), true);
        $this->load->admin_dashboard('blogs/home', $this->data);
    }
    public function new_post()
    {
        $this->data['authors'] = $this->UserModel->get(null, ['id', 'name']);
        $this->data['categories'] = json_decode($this->CategoriesModel->get(null, ['id', 'name']), true);
        $this->data['tags'] = json_decode($this->TagsModel->get(null, ['id', 'name']), true);
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

    public function edit_post($post_id){
        $this->data['post'] = json_decode($this->BlogsModel->get(['id' => $post_id]), true);
        $this->load->admin_dashboard('blogs/edit', $this->data);
    }

    /* API Routes Handlers */
    /*
    Array
    (
        [post_title, post_content, post_except, seo_title, seo_description, seo_slug, status, post_author, post_category, lang, post_tags, post_thumb, post_image]
    )
    */

    public function api_new_post($version = 2)
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
