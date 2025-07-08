<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TagsModel extends CI_Model
{
    public $request, $response, $data, $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['tags'] = "post_tags";
    }

    public function get($where = null, $select = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $result = $this->db->get($this->table['tags'])->result_array();
        return json_encode($result);
    }
}
