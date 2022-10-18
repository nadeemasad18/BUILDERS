<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    public function signin(){
        $this->load->library('form_validation');
        $this->load->model('Realtor');
        $this->load->view('headers/styling/loginStyling');
        $this->load->view('headers/nav/nav.php');  
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required'=>'Your email is required', 'valid_email'=>'You did not enter a valid email'));
        $this->form_validation->set_rules('password', 'Password','required', array('required'=>'Your password is required'));
        if($this->form_validation->run()==FALSE){
        $this->load->view('login/login');
        }
        else{
            // Check if realtor exists in the system 
            $exists = $this->Realtor->exists($this->input->post('email'));
            if($exists == FALSE){
                $data['no_user']='  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                An account with that email does not exist
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                $this->load->view('login/login', $data);
            }
            else{
                $authenticate = $this->Realtor->authenticate($this->input->post('email'), $this->input->post('password'));
                if($authenticate== FALSE){
                  
                    $data['incorrectPwd']='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    You\'ve entered an incorrect password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                    $this->load->view('login/login', $data);
                }
                else{
                    $realtor_data = array(
                        'realtor_id'=>$authenticate->realtor_id,
                        'fname'=>$authenticate->fname,
                        'lname'=>$authenticate->lname,
                        'email'=>$authenticate->email
                    );
                    $this->session->set_userdata($realtor_data);
                    redirect('../index.php/Admin/my_dash');
                }
            }
        }
        
    }

    public function forgot_pwd(){
        $this->load->view('headers/styling/loginStyling.php');
        $this->load->view('headers/nav/nav'); 
        $this->load->model('Realtor');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', array('required'=>'Your email is required', 'valid_email'=>'The email you entered is not valid'));
        if($this->form_validation->run()==FALSE){
            $this->load->view('login/forgot');
        }
        else{
            $exists = $this->Realtor->exists($this->input->post('email'));
            if($exists == FALSE){
                $data['no_user']='<div class="alert alert-warning">A realtor with this email does not exist <i class="fa fa-exclamation-circle"></i></div>';
                $this->load->view('login/forgot', $data);
            }
            else{
                $code = mt_rand(100000, 999999);
                $send_verification_code = $this->Realtor->send_verification_code($code, $this->input->post('email'));
                if($send_verification_code == TRUE && $this->__send_email($code, $this->input->post('email'))==TRUE){
                    redirect('./Login/verify/'.$this->input->post('email').'');
                }
                else{
                    $data['err']='<div class="alert alert-danger">There was an issue sending your verification code <i class="fa fa-exclamation-circle"></i></div>';
                    $this->load->view('login/forgot', $data);
                }
            }
        }
        
    }

    public function verify($email){
        $this->load->model('Realtor');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('code', 'Verification Code', 'required|trim|numeric', array('required'=>'The verification code is required', 'numeric'=>'The verification code must be a number'));
        if($this->form_validation->run()==FALSE){
            $this->load->view('headers/styling/loginStyling.php');
            $this->load->view('headers/nav/nav');  
            $this->load->view('login/verify');
        }
        else{
            $verify_code = $this->Realtor->verify_code($email, $this->input->post('code'));
            if($verify_code == FALSE){
                $data['wrong_code']='<div class="alert alert-danger">The code you entered is incorrect, check your email and try again <i class="fa fa-exclamation-circle"></i></div>';
                $this->load->view('login/verify',$data);
            }
            else{
                redirect('./Login/update_pwd/'.$email.'');
            }
        }
    }

    public function update_pwd($email){
        $this->load->library('form_validation');
        $this->load->model('Realtor');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|regex_match[/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/]', array('required' => 'Please enter a secure password', 'regex_match'=>'The password must meet the following constraints: at least 8 characters in length, one uppercase letter, one number, and one symbol'));
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|matches[password]', array('required' => 'Please verify your password', 'matches'=>'both passwords must match'));
        if($this->form_validation->run()==FALSE){
            $this->load->view('headers/styling/loginStyling.php');
            $this->load->view('headers/nav/nav');  
            $this->load->view('login/update_pwd');
        }
        else{
            if($this->Realtor->update_pass($email, password_hash($this->input->post('password'), PASSWORD_DEFAULT))==TRUE){
                $pwd_updated = '<div class="alert alet-success">Your password was successfully updated, you can now login <i class="fa fa-check-circle"></i></div>';
                $this->session->set_flashdata('pwd_updated', $pwd_updated);
                redirect('./Login/signin');
            }
            else{
                $data['err']='<div class="alert alert-danger">There was an issue updating your password<i class="fa fa-exclamation-circle"></i></div>';
                $this->load->view('/login/update_pwd', $data);
            }
        }
    }

    public function mortgage() {
        $this->load->view('headers/styling/MortgageCalcStyling.php');
        $this->load->view('headers/nav/nav.php');  
        $this->load->view ('home/MortgageCalc');


    }

    private function __send_email($code, $email){
  
       // Email library is already autoloaded 
       $config['useragent']='CodeIgniter';
       $config['protocol']='smtp';
       $config['smtp_host']='smtp.ionos.com';
       $config['smtp_user']='accounts@novamusic.app';
       $config['smtp_pass']='**3@StR0(kEnt3rt1Nm3nT%!**';
       $config['smtp_port']='587';
       $config['newline']="\r\n";
       $config['smtp_timeout']='5';
       $config['smtp_crypto']='tls';
       $config['wordwrap']=TRUE;
       $config['mailtype']='html';
       $config['charset']='iso-8859-1';
       $this->email->initialize($config);
       $this->email->from('accounts@novamusic.app');
       $this->email->to($email);
       $this->email->subject('Password Reset');
       $this->email->message('Looks like you\'ve initiated an account recover, to continue, please enter this six digit code: '.$code.'');
       if(!$this->email->send()){
       // return FALSE;
       echo $this->email->print_debugger();
       }
       else{
        return TRUE;
       }



    }




}
?>


