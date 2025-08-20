<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsModel extends CI_Model
{
    public $request, $response, $data, $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['settings'] = "panel_config";
    }

    /**
     * Fetch records from the settings table.
     *
     * @param array|null $where Conditions for the query.
     * @param string|null $select Specific columns to select.
     * @return string JSON-encoded result array.
     */
    public function get($where = null, $select = null){
        if(!is_null($select)){
            $this->db->select($select);
        }
        if(!is_null($where)){
            $this->db->where($where);
        }
        return json_encode($this->db->get($this->table['settings'])->result_array());
    }

    /**
     * Update records in the settings table.
     *
     * @param array $data Data to update.
     * @param array $where Conditions for the update.
     * @return bool TRUE on success, FALSE on failure.
     */
    public function update($data, $where)
    {
        $this->db->where($where);
        return $this->db->update($this->table['settings'], $data);
    }
}
