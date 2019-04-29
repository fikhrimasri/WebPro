<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function Register() {
        $data = array(
            "First" => $this->input->post('first'),
            "Last" => $this->input->post('last'),
			"Email" => $this->input->post('email'),
			"Pass" => md5($this->input->post('password'))
        );

        if($this->isExist($data['Email'])) {
            return false;
        } else {
            $this->db->insert('akun_jobseekers', $data);
            $this->db->insert('login',
            array(
                "Email" => $data['Email'],
                "Pass" => $data['Pass']
            ));
            return true;
        };
    }

    public function isExist($email){
        $this->db->where('Email',$email);
        $result = $this->db->get('akun_jobseekers')->result_array();
        if(isset($result[0])){
            return true;
        }else{
            return false;
        };
    }

    public function findUser(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        
        $this->db->select('Email');
        $this->db->from('login');
        $this->db->where('Email',$email);
        $this->db->where('Pass',$password);
        $result = $this->db->get();
        if($result->num_rows()==0){
            return FALSE;
        }else{
            return $result->row_array();
        }
    }


}