<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {
	
	public function index()
	{
		
	}
	
	public function login()
	{
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
 
		//query the database
		$this -> load -> model('user','', TRUE);
		$result = $this -> user -> login($username, $password);
		
		if($result)
		{
			$sess_array = array();
			
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row-> email
				);
			   
				$this -> session -> set_userdata('logged_in', $sess_array);
			   
			}
			 redirect('/members/');
		   }
		   else
		   {
			 $this -> session -> set_userdata('error_message', 'Wrong username / password combination');
			 redirect('');
		   }
	}
	
	public function logout()
	{
		$this -> session -> sess_destroy();
        redirect('');
	}
	
	public function register()
	{
		$this -> load -> model('user');
		
		if($this->input->post('email'))
			if (!$this->user->email_exist($this->input->post('email')))
			{
				$this->user->add_username($this->input->post('name'), $this->input->post('email'), $this->input->post('password'));
				redirect();
			}
			else
				$this -> session -> set_userdata('error_message', 'Email already registered.');
			
		$this->load->view('register');
	}
}
