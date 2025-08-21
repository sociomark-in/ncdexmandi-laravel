<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommoditiesModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Get all commodities from 'post_commodities' table
     *
     * @param array $where Conditions for the query
     * @return array|bool Array of commodities or false on failure
     */
    public function get($where = null, $select = ["*"]) {
        $this->db->select($select);
        $this->db->distinct();
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get('post_commodities');
        if ($query->num_rows() > 0) {
            return json_encode($query->result_array()); // Return the result as an array
        }
        return false; // Return false if no records found
    }

    /**
     * Insert data into 'post_commodities' table
     *
     * @param array $data
     * @return bool|int Insert ID on success, false on failure
     */
    public function insert($data) {
        if ($this->db->insert('post_commodities', $data)) {
            return $this->db->insert_id(); // Return the ID of the inserted row
        }
        return false; // Return false on failure
    }

    /**
     * Update data in 'post_commodities' table
     *
     * @param array $data Data to update
     * @param array $where Conditions for the update
     * @return bool True on success, false on failure
     */
    public function update($data, $where) {
        $this->db->where($where);
        return $this->db->update('post_commodities', $data); // Return true on success, false on failure
    }
}