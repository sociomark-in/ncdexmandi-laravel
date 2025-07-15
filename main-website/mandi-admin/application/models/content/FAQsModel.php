<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FAQsModel extends CI_Model
{
    public $request, $response, $data, $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['posts'] = "faq_content";
        $this->table['categories'] = "faq_categories";
    }

    public function get($where = null, $select = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $result = $this->db->get($this->table['posts'])->result_array();
        return json_encode($result);
    }

    public function new($request)
    {
        if ($this->db->insert($this->table['posts'], $request)) {
            return true;
        } else {
            return false;
        }
    }
    public function update($request, $where)
    {
        $this->db->trans_begin();
        $this->db->where($where);
        $this->db->update($this->table['posts'], $request);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function update_category($request, $where)
    {
        $this->db->trans_begin();
        $this->db->where($where);
        $this->db->update($this->table['categories'], $request);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function new_category($request)
    {
        if ($this->db->insert($this->table['categories'], $request)) {
            return true;
        } else {
            return false;
        }
    }
    public function get_category($where = null, $select = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $result = $this->db->get($this->table['categories'])->result_array();
        return json_encode($result);

        return "{}";
    }
}
