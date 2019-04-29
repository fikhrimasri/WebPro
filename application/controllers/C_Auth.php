<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header_home');
		$this->load->view('V_home');
		$this->load->view('templates/footer');
		}


    public function Signin()
	{
		// $cookie = $this->input->cookie('logged');
        // if(isset($cookie) || isset($_SESSION['successLogin'])){
        //     $this->Signup();
        // } else {
		$this->load->view('templates/header_signin');
		$this->load->view('V_Login');
		$this->load->view('templates/footer');
        
		// }
	}

	public function Signup()
	{

		$this->load->view('templates/header_signup');
		$this->load->view('V_SignUp');
		$this->load->view('templates/footer');
        
	}

	public function Signup1()
	{
		$data['title'] = "Register";
		$this->load->view('templates/header_signup');
		$this->load->view('V_SignUp1');
		$this->load->view('templates/footer');
        
	}

	public function bSignup()
	{
		$this->load->view('templates/header_signup');
		$this->load->view('V_bsignup');
	}

	public function employee()
	{
		$this->load->view('templates/header');
		$this->load->view('V_Employers');
		$this->load->view('templates/footer');

	}

	public function set()
	{
		$this->load->view('V_Akunset');

	}


}

