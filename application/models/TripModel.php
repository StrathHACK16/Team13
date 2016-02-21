<?php
class tripModel extends CI_Model {
 
function getTrips(){
  $this->db->select("id,name,user_id,private");
  $this->db->from('trip');
  $query = $this->db->get();
  return $query->result();
}
 
}
?>
