<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";
class FAQsController extends MY_Controller
{
    public $error, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('content/FAQsModel');
        $this->load->model('content/TagsModel');
        $this->load->model('data/FPOsModel');
        $this->load->model('content/BlogsModel');
        $this->error = [];
    }

    public function index()
    {
        $categories = json_decode($this->FAQsModel->get_category(null, ['id', 'name']), true);
        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]['count'] = count(json_decode($this->FAQsModel->get(['post_category' => $categories[$i]['id']]), true)) ?? 0;
            $categories[$i]['posts'] = json_decode($this->FAQsModel->get(['post_category' => $categories[$i]['id']]), true) ?? NULL;
        }
        $this->data['categories'] = $categories;
        if ($this->input->get('post_category') != NULL) {
            $this->data['posts'] = json_decode($this->FAQsModel->get(['post_category' => $this->input->get('post_category')]), true);
        } else {
            $this->data['posts'] = json_decode($this->FAQsModel->get(), true);
        }
        $this->load->admin_dashboard('faqs/home', $this->data);
    }

    public function new_post()
    {
        $this->data['authors'] = $this->UserModel->get(null, ['id', 'name']);
        $this->data['categories'] = json_decode($this->FAQsModel->get_category(null, ['id', 'name']), true);
        $this->data['tags'] = json_decode($this->TagsModel->get(null, ['id', 'name']), true);
        $this->load->admin_dashboard('faqs/new', $this->data);
    }

    public function edit_post($id)
    {
        $this->data['authors'] = $this->UserModel->get(null, ['id', 'name']);
        $this->data['categories'] = json_decode($this->FAQsModel->get_category(null, ['id', 'name']), true);
        $this->data['tags'] = json_decode($this->TagsModel->get(null, ['id', 'name']), true);
        $this->data['faq'] = json_decode($this->FAQsModel->get(['id' => $id]), true)[0];
        $this->load->admin_dashboard('faqs/edit', $this->data);
    }

    /* API Routes Handlers */
    public function api_new_category()
    {
        $this->request = $this->input->post();
        $data = [
            'name' => $this->request['name'],
            'description' => $this->request['description'],
        ];
        if ($this->FAQsModel->new_category($data)) {
            redirect($this->request['redirect']);
        }
    }
    public function api_edit_category()
    {
        $this->request = $this->input->post();

        $data = [
            'name' => $this->request['name'],
            'description' => $this->request['description'] ?? NULL,
        ];
        if ($this->FAQsModel->update_category($data, ['id' => $this->request['id']])) {
            redirect('faqs');
        }
    }
    public function api_new_post()
    {
        $this->request = $this->input->post();
        $data = [
            'post_title' => $this->request['post_title'],
            'post_content' => $this->request['post_content'] ?? "",
            'status' => $this->request['status'] ?? 0,
            'post_author' => $this->request['post_author'],
            'post_category' => $this->request['post_category'],
            'post_tags' => json_encode($this->request['post_tags'] ?? NULL),
        ];
        if ($this->FAQsModel->new($data)) {
            redirect('faqs');
        }
    }
    public function api_edit_post()
    {
        $this->request = $this->input->post();
        $tags = $this->add_missing_tags($this->request['post_tags']);
        $data = [
            'post_title' => $this->request['post_title'],
            'post_content' => $this->request['post_content'] ?? "",
            'status' => $this->request['status'] ?? 0,
            'post_author' => $this->request['post_author'],
            'post_category' => $this->request['post_category'],
            'post_tags' => json_encode($tags) ?? NULL,
        ];
        if ($this->FAQsModel->update($data, ['id' => $this->request['id']])) {
            redirect('faqs');
        }
    }

    public function api_get()
    {
        $this->request = $this->input->post();

        switch ($this->request['type']) {
            case 'category':
                $data = json_decode($this->FAQsModel->get_category(['id' => $this->request['id']]), true)[0];
                break;

            default:
                # code...
                $data = $this->FAQsModel->get(['id' => $this->request['id']]);
                break;
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
    }

    public function api_disable()
    {
        $this->request = $this->input->post();

        switch ($this->request['type']) {
            case 'category':
                $this->FAQsModel->delete_category(['id' => $this->request['id']], ['status' => 0]);
                break;

            default:
                # code...
                $data = $this->FAQsModel->delete(['id' => $this->request['id']], ['status' => 0]);
                break;
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
    }
}
