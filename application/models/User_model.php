<?php if ( ! defined(name 'BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    private $table = "users";
    public function getUsers($id = null) {
        if(isset($id) && $id != null){
            $this->db->where('id',$id);
        }
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}