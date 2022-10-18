<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    if(!isset($this->session->email)){
        redirect('../index.php/Login/signin');
    }
} 


public function my_dash(){
    $this->load->model('Realtor');
    $data['notifications']=$this->Realtor->get_notifications();
    $data['properties'] = $this->Realtor->get_properties();
    $this->load->view('headers/styling/adminDashStyling.php');
    $this->load->view('admin/navbar', $data);
    $this->load->view('admin/dash', $data);
    $this->load->view('admin/footer');
}

public function my_profile(){
    $this->load->model('Realtor');
    $data['notifications']=$this->Realtor->get_notifications();
    $this->load->view('headers/styling/adminDashStyling.php');
    $this->load->view('admin/navbar', $data);
    $this->load->view('admin/profile');
    $this->load->view('admin/footer');
}

public function update_profile(){
    echo 'update profile';
}

public function upload_profile_pic(){
    $this->load->model('Realtor');
    $this->form_validation->set_rules('profile_pic', 'Profile Picture', 'required', array('required'=>'Profile image url is required'));
    if($this->form_validation->run()==FALSE){
        $errors = validation_errors('<div class="alert alert-danger">', '</div>');
        $this->session->set_flashdata('upload_errors', $errors);
        redirect('./Admin/my_profile');
    }
    else{
        $upload_image = $this->Realtor->upload_profile_pic($this->input->post('profile_pic'), $this->session->realtor_id);
        if($upload_image == TRUE){
            $user_data = array(
                'profile_pic'=>$this->input->post('profile_pic')
            );
            $this->session->unset_userdata($user_data);
            $this->session->set_userdata($user_data); 
            $image_upload_success = '<div class="alert alert-success"> Your profile image was successfully changed</div>';
            $this->session->set_flashdata('image_upload_success', $image_upload_success);
            redirect('./Admin/my_profile');
    
        }
        else{
            $image_upload_failed = '<div class="alert alert-warning"> Issue with uploading your profile image </div>';
            $this->session->set_flashdata('image_upload_failed', $image_upload_failed);
            redirect('./Admin/my_profile');


        }
    }
    
}


public function change_pass(){
    $this->load->model('Realtor');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('curr_pwd', 'Current Password', 'required|trim', array('required'=>'Your current password is required'));
    $this->form_validation->set_rules('new_pwd', 'Password', 'required|trim|regex_match[/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/]', array('required' => 'You need to create a new password', 'regex_match'=>'Your password is not secure enough, please enter a secure password'));
    $this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'required|trim|matches[new_pwd]', array('required' => 'Please confirm your new password', 'matches'=>'both passwords must match'));
    if($this->form_validation->run()==FALSE){
        $errors = validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>', '</div>');
		$this->session->set_flashdata('errors',$errors);
        redirect('./Admin/my_profile');
    }
    else{
        $verify_curr_pwd = $this->Realtor->verify_curr_pwd($this->session->realtor_id, $this->input->post('curr_pwd'));
        if($verify_curr_pwd == FALSE){
            $incorrect_curr_pwd = '<div class="alert alert-danger">That was not your current password, try again</div>';
            $this->session->set_flashdata('incorrect_curr_pwd', $incorrect_curr_pwd );
            redirect('./Admin/my_profile');
        }
        else{
        
            $update_pwd = $this->Realtor->update_pwd($this->session->realtor_id, password_hash($this->input->post('new_pwd'), PASSWORD_DEFAULT));
            if($update_pwd == TRUE){
                $pwd_updated = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your password was successfully updated! </div>';
                $this->session->set_flashdata('pwd_updated', $pwd_updated );
                redirect('./Admin/my_profile'); 
            }
            else{
                $pwd_update_fail = '<div class="alert alert-danger alert-dismissible fade show" role="alert">There was an issue updating your password, try again </div>';
                $this->session->set_flashdata('pwd_update_fail', $pwd_update_fail );
                redirect('./Admin/my_profile'); 
            }
        }
    }
}

public function form(){
    $this->load->library('form_validation');
    $this->load->model('Realtor');
    $this->load->view('headers/styling/adminDashStyling.php');
    $this->load->view('admin/property_upload');
    $this->load->view('admin/footer');
}

public function property($id){
    $this->load->model('Realtor');
    $data['property']=$this->Realtor->get_property($id);
    $this->load->view('headers/styling/adminDashStyling.php');
    $this->load->view('admin/property', $data);
    $this->load->view('admin/footer');
}


public function upload_property(){
    $this->load->model('Realtor');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('property_address', 'Property Address', 'required', array('required'=>'The property address is required'));
    $this->form_validation->set_rules('state', 'state', 'required', array('required'=>'The state is required'));
    $this->form_validation->set_rules('city', 'City', 'required', array('required'=>'The city is required'));
    $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|max_length[5]', array('required'=>'The zipcode is required', 'max_lengthd'=>'You have entered an invalid zipcode'));
    $this->form_validation->set_rules('beds', 'Beds', 'required|numeric', array('required'=>'The number of beds is required', 'numeric'=>'number of beds must be a number'));
    $this->form_validation->set_rules('baths', 'Baths', 'required|numeric', array('required'=>'The number of baths is required', 'numeric'=>'number of baths must be a number'));
    $this->form_validation->set_rules('square_footage', 'Square Footage', 'required|numeric', array('required'=>'The square footage is required', 'numeric'=>'Invalid, must be a number'));
    $this->form_validation->set_rules('features', 'Features', 'required', array('required'=>'Features is a required field, if there are none, type N/A'));
    if($this->form_validation->run()==FALSE){
        $errors = validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '
      </div>');
        $this->session->set_flashdata('errors', $errors);
        redirect('../index.php/Admin/form');
    }
    else{
        $property = array(
            'property_id'=>uniqid(time()),
            'property_type'=>$this->input->post('property_type'),
            'property_address'=>$this->input->post('property_address'),
            'property_city'=>$this->input->post('city'),
            'property_state'=>$this->input->post('state'),
            'zipcode'=>$this->input->post('zipcode'),
            'property_value'=>$this->input->post('property_value'),
            'beds'=>$this->input->post('beds'),
            'baths'=>$this->input->post('baths'),
            'square_footage'=>$this->input->post('square_footage'),
            'lot_size'=>$this->input->post('lot_size'),
            'property_description'=>$this->input->post('property_description'),
            'listed_by'=>$this->session->fname. ' '.$this->session->lname,
            'features'=>$this->input->post('features'),
            'property_image'=>$this->input->post('property_image')
        );
        if($this->Realtor->upload($property)){
            $data['uploaded']='<div class="alert alert-success">Your property was successfully uploaded </div>';
            $this->session->set_flashdata('uploaded', $uploaded);
            redirect('../index.php/Admin/form');
        }
        else{
            $data['not_uploaded']='<div class="alert alert-danger">There was an issue uploading your property </div>';
            $this->session->set_flashdata('not_uploaded', $not_uploaded);
            redirect('../index.php/Admin/form');
        }

    
    }
}

public function remove_property($id){
    $this->load->model('Realtor');
    $remove_listing = $this->Realtor->remove_listing($id);
    if($remove_listing == TRUE){
        $property_removed='<div class="alert alert-success">Property was successfully removed <i class="fa fa-check-circle"></i></div>';
        $this->session->set_flashdata('property_removed', $property_removed);
        redirect('../index.php/Admin/my_dash');
    }
    else{
        $remove_error = '<div class="alert alert-danger">There was an issue removing your property </div>';
        $this->session->set_flashdata('remove_error', $remove_error);
        redirect('../index.php/Admin/my_dash');
    }
}

public function logout(){
    session_destroy();
    redirect('../index.php/Login/signin');
}

}
?>