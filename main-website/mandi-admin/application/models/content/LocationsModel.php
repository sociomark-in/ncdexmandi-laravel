<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LocationsModel extends CI_Model {

    private $table = [
        'states' => 'cities_megadata', // Assuming the table name is 'states'
        // You can add more tables here if needed
    ];
    /**
     * Constructor to load the database
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Get all states from the database
     *
     * @return array
     */
    public function getAllStates($where = null)
    {
        $this->db->distinct();
        $this->db->select('city_state');
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->order_by('city_state', 'ASC');
        $result = $this->db->get($this->table['states'])->result_array();

        $data = [];
        foreach ($result as $row) {
            $data[] = $row['city_state'];
        }

        return json_encode($data);
    }
}