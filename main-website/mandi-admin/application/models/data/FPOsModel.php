<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FPOsModel extends CI_Model
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['fpos'] = 'fpos';
        $this->table['commodities'] = 'post_commodities';
    }

    public function get_commodities($conditions = null, $fields = ['*'])
    {
        $this->db->select($fields);
        if ($conditions) {
            $this->db->where($conditions);
        }
        $query = $this->db->get($this->table['commodities']);
        return json_encode($query->result_array());
    }
}