<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BlogsModel extends CI_Model
{
    public $request, $response, $data, $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['posts'] = "post_content";
    }

    public function get($where = null, $select = null)
    {
        // if (!is_null($select)) {
        //     $this->db->select($select);
        // }
        // if (!is_null($where)) {
        //     $this->db->where($where);
        // }
        // $result = $this->db->get($this->table['posts'])->result_array();
        // return json_encode($result);

        return "{}";
    }
}