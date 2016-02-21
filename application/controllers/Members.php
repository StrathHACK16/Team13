<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

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
		if(!$this -> user -> isUserLoggedIn())
		{
			redirect();
			exit();
		}
		
		$this -> load -> model('tripModel');
		
		$data['trips'] = $this -> tripModel -> getTrips(); // calling Post model method getPosts()
		
		$this -> load -> view('header');
		$this -> load -> view('trip_view', $data);
		$this -> load -> view('footer');
	}
	
	public function add_trips($trip_id)
 {
		$this -> db -> select('name');
		$this -> db -> limit(1);
		$this -> db -> where('id', $trip_id);
		$this -> db -> order_by("id", "desc");
		$query = $this -> db -> get("trip");
		
		$data['name']=$query -> result()[0] -> name;
	 
	 if($this->input->post('location_go') && $this->input->post('location_come') && $this->input->post('date'))
	 {

		
		$location_go = $this->input->post('location_go');
		$location_come = $this->input->post('location_come');
		$date = $this -> input -> post('date');
		
		$var = array(
			'location_from' => $location_go ,
			'location_to' => $location_come ,
			'date' => $date,
			'trip_id' => $trip_id
		);

		$this->db->insert('location', $var); 
		
		redirect('main/trip/' . $trip_id);
	 }
	 else
		$this->load->view('location_view', $data);
 }
 
 public function maps()
 {
		$this -> load -> view('header');
		$this -> load -> view('maps');
		$this -> load -> view('footer');
 }
 
 public function add_name()
{
	
	if($this->input->post('name'))
	{
		$data = array(
			'user_id' => $this->session->userdata('logged_in')['id'],
			'name' => $this->input->post('name'),
			'private' => 0
		);
		
		$this -> db -> insert('trip', $data);
		
		redirect("members/add_trips/" . $this -> db -> insert_id());
	}
	$this -> load -> view('create_trip');
}
}
