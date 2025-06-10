<?php
class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($where = null, $select= null){
        if(!is_null($select)){
            $this->db->select($select);
        }
        if(!is_null($where)){
            $this->db->where($where);
        }
        $result = $this->db->get('panel_users')->result_array()[0];
        return $result;
    }

    public function authorize(array $request){
        $this->db->where('username', $request['username']);
        $result = $this->db->get('panel_users')->result_array()[0];
        if($result['username'] == 'hemant@sociomark.in'){
            if($request['password'] == $result['password']){
                return $result;
            }
        }else{
            if(password_verify($request['password'],$result['password'])){
                return $result;
            }
        }
    }

    public function new($data){
        $this->db->insert('users', $data);
    }
}
