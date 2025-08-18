<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BlogsModel extends CI_Model
{
    public $request, $response, $data, $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['posts'] = "blog_post";
    }

    public function get($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }
        if (!is_null($where)) {
            if (isset($where['post_tags']) && !is_null($where['post_tags'])) {
                $tags = json_decode($where['post_tags'], true);
                $this->db->like('post_tags', '"' . $tags . '"', 'both');
                unset($where['post_tags']);
            }
            else {
                $this->db->where($where);
            }
        }

        $result = $this->db->get($this->table['posts'])->result_array();
        return json_encode($result);
    }

    public function new($request)
    {
        $this->db->trans_begin();
        $this->db->insert($this->table['posts'], $request);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
}