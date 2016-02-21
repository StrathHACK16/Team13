<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, email, password');
   $this -> db -> from('users');
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
	 return false;
 }
}
?>