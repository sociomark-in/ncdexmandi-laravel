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

    public function get($where = null, $select = null){
        if(!is_null($select)){
            $this->db->select($select);
        }
        if(!is_null($where)){
            $this->db->where($where);
        }
        return json_encode($this->db->get($this->table['settings'])->result_array());
    }
}
