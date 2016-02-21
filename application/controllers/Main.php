<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	
	public function trip($id = 0)
	{
		if($id == 0)
			exit("No id!");
		
		$query = $this -> db -> query("SELECT * FROM trip WHERE id='$id' LIMIT 1");
		
		if(count($query -> result()) > 0)
		{
			$result = $query -> result()[0];
			
			$query = $this -> db -> query("SELECT * FROM location WHERE trip_id='$id'");
			
			foreach($query -> result_array() as $data)
			{
				$result -> locations[] = $data;
			}
			
			$toSend['result'] = $result;
			
			$this -> load -> view('trip', $toSend);
		}
		else
			exit("No trip id found!");
	}
}
