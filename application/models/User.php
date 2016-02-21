<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, email, password');
   $this -> db -> from('customerdetails');
   $this -> db -> where('email', $username);
   $this -> db -> where('password',$password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 function isUserLoggedIn()
 {
	 if($this -> session -> userdata('logged_in'))
		 return true;
	 
	 $this -> session -> set_userdata('error_message', 'Not logged in!');
	
	return false;
 }
 
 function email_exist($email)
 {
	$this -> db -> select('email');
	$this -> db -> from('users');
	$this -> db -> where('email', $email);
	$query = $this -> db -> get();
	
	if($query -> num_rows() == 0)
		return false;
	else
		return true;
 }
 
 function add_username($name, $email, $password)
 {
	$var = array(
		'name' => $name,
		'email' => $email,
		'password' => $password,
	);

	$this->db->insert('users', $var); 
 }
}
?>