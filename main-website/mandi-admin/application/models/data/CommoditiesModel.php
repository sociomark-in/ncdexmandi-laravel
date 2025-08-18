<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommoditiesModel extends CI_Model {

    public function __construct() {
        parent::__construct();
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