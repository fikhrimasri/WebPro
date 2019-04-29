<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User');
		$this->load->library('form_validation');
	}
    
    public function index(){
		$this->load->view('templates/header_signin');
		$this->load->view('V_Login');
		$this->load->view('templates/footer');
    }
    
	public function Register()
	{
        $this->load->view('templates/header_signup');
		$this->load->view('V_SignUp1');
		$this->load->view('templates/footer');
            // $this->load->view('C_Auth/Signup1');
        }
    public function login()
	{
		$this->load->view('V_Akunset');
            // $this->load->view('C_Auth/Signup1');
        }


    public function addUser(){
        $this->form_validation->set_rules('first','first','required');
        $this->form_validation->set_rules('last','last','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required|');
    
        if($this->form_validation->run()==TRUE){
            redirect('UserController/Register');
        }else{
            $this->User->Register();
            redirect(site_url('UserController'));
            }
        }
	public function signIn(){
		$this->load->model('User');
		$user = $this->User->findUser();
		if($user != FALSE){
			$this->session->set_userdata('email',$user['email']);
			redirect(site_url('UserController/login'));
		}else{
			redirect(site_url('UserController'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('UserController'));
	}

	public function changePassword()
	{
		$data['user'] = $this->db->get_where('akun_jobseekers', ['Pass' => 
		$this->session->userdata('Pass')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			redirect('UserController/login', $data);
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if(!password_verify($current_password, $data['user']['Pass'])){
				redirect('UserController/changePassword');
			}else{
				if($current_password == $new_password){
				redirect('UserController/changePassword');
				}else{
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('Pass', $password_hash);
					$this->db->where('Pass', $this->sesssion->userdata('Pass'));
					$this->db->update('akun_jobseekers');

					redirect('UserController');
				}
			}
		}

	}

}