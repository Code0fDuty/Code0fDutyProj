<?php 

class User_model extends CI_Model {
    
    function insertuser($data)
        {
            $this->db->insert('tbl_user',$data);
        }

    function checkPassword($password,$email)
    {
         $query = $this->db->query("SELECT * FROM tbl_user WHERE password = '$password' 
            AND email= '$email' AND status= '1'");

        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
 
}