<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Realtor extends CI_Model{

    public function exists($email){
        $this->db->select('*');
        $this->db->from('realtors');
        $this->db->where('email', $email);
        $results=$this->db->get()->num_rows();
        if ($results > 0){
            return true;
        }
        else {
            return false;
        }
     }

     public function send_verification_code($code, $email){
        $this->db->set('verification_code', $code);
        $this->db->where('email', $email);
        if($this->db->update('realtors')){
            return TRUE;
        }
        else{
            return FALSE;
        }
     }


     public function verify_code($email, $code){
        $this->db->select('*');
        $this->db->from('realtors');
        $this->db->where('email', $email);
        $results = $this->db->get()->result_array();
        foreach($results as $row){
            $verification_code = $row['verification_code'];
        }
        if($code == $verification_code){
            $this->db->set('verified', 1);
            $this->db->where('email', $email);
            if($this->db->update('realtors')){
                return true;
            }
           
        }
        else{
            return FALSE;
        }
     }

     // Update for verification 
    
     public function update_pass($email, $pwd){
        $this->db->set('password', $pwd);
        $this->db->where('email', $email);
        $update = $this->db->update('realtors');
        if($update){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    
     public function upload($property){
        return $this->db->insert('properties', $property);
     }

    public function insert_notification($contactDetails){
        return $this->db->insert('notifications', $contactDetails);
    }
     // Get all properties 

     public function get_properties(){
        $data= $this->db->query("SELECT * FROM properties");
        return array('count'=>$data->num_rows(), 'data'=>$data->result(),'first'=>$data->row());
     }
    // Get individual property
     public function get_property($id){
        $data= $this->db->query("SELECT * FROM properties WHERE property_id='{$id}'");
        return array('count'=>$data->num_rows(), 'data'=>$data->result(),'first'=>$data->row());
     }

     // Get all notifications and display them in the navbar on the admin side 

    public function get_notifications(){
        $data = $this->db->query("SELECT * FROM notifications");
        return array('count'=>$data->num_rows(), 'data'=>$data->result(), 'first'=>$data->row());
    }
     public function remove_listing($id){
        $this->db->where('property_id', $id);
        if($this->db->delete('properties')){
            return TRUE;
        }
        else{
            return FALSE;
        }
     }
      // Login verification
public function authenticate($email, $password)
{
    $this->db->where('email', $email);
    $query = $this->db->get('realtors');

    if($query->num_rows() == 1) {
        foreach($query->result_array() as $row){
            $right_pwd = $row['password'];
        }  // If they enter the right password, authenticate into the dashboard and get their data
        if(password_verify($password, $right_pwd)){
            return $query->row();
        }

    }

    return false;
}

public function verify_curr_pwd($id, $pwd){
    $this->db->select('*');
    $this->db->from('realtors');
    $this->db->where('realtor_id', $id);
    $results = $this->db->get()->result_array();
    foreach($results as $row){
        $currentPass = $row['password'];
    }
    if(password_verify($pwd, $currentPass)){
        return TRUE;
    }
    else{
        return FALSE;
    }

}

public function update_pwd($id, $pwd){
    $this->db->set('password', $pwd);
    $this->db->where('realtor_id', $id);
    if($this->db->update('realtors')){
        return TRUE;
    }    
    else{
        return FALSE;
    }
}

public function upload_profile_pic($profile_pic, $realtor_id){
    $this->db->set('profile_pic', $profile_pic);
    $this->db->where('realtor_id', $realtor_id);
    if($this->db->update('realtors')){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
}
?>