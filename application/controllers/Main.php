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
		$this -> load -> model ('votes');
		
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
			$toSend['trip_id'] = $id;
			
			$this -> load -> view('header', $toSend);
			$this -> load -> view('details', $toSend);
			$this -> load -> view('footer');
		}
		else
			exit("No trip id found!");
	}
	
	public function add_votes($location_id, $type)
	{
				
		$this -> load -> model('votes');
		
		$this -> db -> select('*');
		$this -> db -> from('location');
		$this -> db -> where('id', $location_id);
		$query = $this -> db -> get();
	
		$data = $query -> result_array();
		
		if($type == 1)
			$this -> votes -> add_vote($this -> session -> userdata('logged_in')['id'], $location_id);
		else
			$this -> votes -> remove_vote($this -> session -> userdata('logged_in')['id'], $location_id);
		
		redirect('main/trip/' . $data[0]['trip_id']);
	}
}
