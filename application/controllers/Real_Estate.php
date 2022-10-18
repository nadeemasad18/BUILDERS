<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Real_Estate extends CI_Controller{

    public function property($id){
    $this->load->model('Realtor');
    $this->load->view('headers/styling/homeStyling.php');
    $this->load->view('headers/nav/nav.php');
    $data['property']=$this->Realtor->get_property($id);
    $this->load->view('home/property', $data);
   
    }
}

?>