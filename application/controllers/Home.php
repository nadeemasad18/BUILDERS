<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function welcome(){
        $this->load->model('Realtor');
        $data['properties'] = $this->Realtor->get_properties();
        $this->load->view('headers/styling/homeStyling.php');
        $this->load->view('headers/nav/nav.php');
        $this->load->view('home/home', $data);
    }

    public function about(){
        $this->load->view('headers/styling/aboutStyling.php');
        $this->load->view('headers/nav/nav.php');        
        $this->load->view('home/about');
    }

    public function contact(){
        $this->load->model('Realtor');
        $this->load->library('form_validation');
        $this->load->view('headers/styling/contactStyling.php');
        $this->load->view('headers/nav/nav.php');
        $this->form_validation->set_rules('txtName', 'Name', 'required', 'min_length[3]', array('required'=>'Your first and last name are required', 'min'=>'Your name must be at least 3 characters long'));
        $this->form_validation->set_rules("txtEmail", 'Email', 'required|valid_email', array('required'=>'Your email is required', 'valid_email'=> 'You did not enter a valid email'));
        $this->form_validation->set_rules('txtMsg', 'Message', 'required|min_length[10]', array('required'=>'Your message is required', 'min'=>'Your message must be at least 10 characters long'));
        if($this->form_validation->run()==FALSE){
            $this->load->view('home/contact');
        }
        else{
            // Send the email and insert notification into DB
            $contactDetails = array(
                'notification_id'=>uniqid(time()),
                'name'=>$this->input->post('txtName'),
                'email'=>$this->input->post('txtEmail'),
                'phone_number'=>$this->input->post('txtPhone'),
                'message'=>$this->input->post('txtMsg')
            );
            $sendNotification = $this->Realtor->insert_notification($contactDetails);
            if($sendNotification){
                $data['notification_sent']='<div class="alert alert-success"> <i class="fa fa-check-circle"></i> Your message was sent, we will get back to you within 24-48 hours</div>';
                $this->load->view('home/contact', $data);
            }
        
        }
    } 
    public function mortgage() {
        $this->load->view('headers/styling/MortgageCalcStyling.php');
        $this->load->view('headers/nav/nav.php');  
        $this->load->view ('home/MortgageCalc');
    }
}
?>