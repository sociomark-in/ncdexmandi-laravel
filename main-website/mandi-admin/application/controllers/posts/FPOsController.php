<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";
class FPOsController extends MY_Controller
{
    public $error, $request, $response;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('content/CategoriesModel');
        $this->load->model('content/TagsModel');
        $this->load->model('content/LocationsModel');
        $this->load->model('data/FPOsModel');
        $this->load->model('data/CommoditiesModel');
        $this->load->model('UserModel');
        $this->error = [];
    }

    public function index()
    {
        $this->data['options']['states'] = json_decode($this->LocationsModel->getAllStates(), true);
        $this->data['options']['commodities'] = json_decode($this->CommoditiesModel->get(), true);
        // $this->data['fpos'] = json_decode($this->FPOsModel->get(), true);
        // $this->data['commodities'] = json_decode($this->FPOsModel->get_commodities(), true);
        // $this->data['fpos_count'] = count($this->data['fpos']);
        // $this->data['commodities_count'] = count($this->data['commodities']);

        $this->load->admin_dashboard('fpos/home', $this->data);
    }
    public function commodities()
    {
        $this->data['commodities'] = json_decode($this->CommoditiesModel->get(), true);
        $this->load->admin_dashboard('fpos/commodities', $this->data);
    }
    public function new_post()
    {
        $this->data['authors'] = $this->UserModel->get(null, ['id', 'name']);
        $this->data['categories'] = $this->CategoriesModel->get(null, ['id', 'name']);
        $this->load->admin_dashboard('episodes/new', $this->data);
    }

    /* API Routes Handlers */

    public function api_new_post()
    {
        $this->request = $this->input->post();

        $data = [
            "name" => $this->request['name'],
            "state" => $this->request['state'],
            "est_date" => $this->request['estd'],
            "commodities" => json_encode($this->request['commodities']),
            "turnover" => $this->request['turnover'],
            "total_locations" => $this->request['locations'],
            "total_members" => $this->request['members'],
        ];

        if($this->FPOsModel->insert_fpo($data)) {
            $this->response['status'] = 'success';
            $this->response['message'] = 'An FPO has been created successfully.';
        } else {
            $this->response['status'] = 'error';
            $this->response['message'] = 'Failed to create an FPO.';
        }

        $this->session->set_flashdata('post_status', $this->response);
        redirect('fpos');
    }

    public function api_new_commodity()
    {
        $this->request = $this->input->post();
        $data['name'] = $this->request['name'];
        $data['slug'] = slugify($this->request['name']);
        $data['valid_until'] = date('Y-m-d', strtotime($this->request['validity']));
        if ($this->CommoditiesModel->insert($data)) {
            $this->response['status'] = 'success';
            $this->response['message'] = 'A Commodity has been created successfully.';
        } else {
            $this->response['status'] = 'error';
            $this->response['message'] = 'Failed to add an Commodity.';
        }
        
        $this->session->set_flashdata('post_status', $this->response);
        redirect('commodities');
    }

    public function api_edit_commodity()
    {
        $this->request = $this->input->post();
        $where['id'] = $this->request['id'];

        $data['name'] = $this->request['name'];
        $data['slug'] = slugify($this->request['name']);
        $data['valid_until'] = date('Y-m-d', strtotime($this->request['validity']));
        if ($this->CommoditiesModel->update($data, $where)) {
            redirect('commodities');
        }
    }
}
