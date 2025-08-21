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
        $this->table['post_fpos'] = 'post_fpos';
    }

    /**
     * Insert data into 'post_fpos' table
     *
     * @param array $data Data to insert
     * @return int|bool Insert ID on success, false on failure
     */
    public function insert_fpo($data)
    {
        if ($this->db->insert($this->table['post_fpos'], $data)) {
            return $this->db->insert_id(); // Return the ID of the inserted row
        }
        return false; // Return false on failure
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