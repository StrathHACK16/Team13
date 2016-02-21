<?php
Class Votes extends CI_Model
{
	public function voted($user_id, $location_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('votes');
		$this -> db -> where('user_id', $user_id);
		$this -> db -> where('location_id', $location_id);
		$query = $this -> db -> get();
	
		if($query -> num_rows() == 0)
			return false;
		else
			return true;
	}
	
	public function return_vote($user_id, $location_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('votes');
		$this -> db -> where('user_id', $user_id);
		$this -> db -> where('location_id', $location_id);
		$query = $this -> db -> get();
	
		$data = $query -> result_array();
		return $data[0]['type'];
	}
	
	public function add_vote($user_id, $location_id)
	{
		if (!$this -> voted($user_id, $location_id))
		{
			$data['user_id'] = $user_id;
			$data['location_id'] = $location_id;
			$data['type'] = 1;
			$this -> db -> insert('votes', $data);
		}
		else if ($this -> return_vote($user_id, $location_id) == 0)
		{
			$data['type'] = 1;
			$this->db->where('user_id', $user_id);
			$this->db->where('location_id', $location_id);
			$this->db->update('votes', $data);
		}
	}
	
	public function remove_vote($user_id, $location_id)
	{
		if (!$this -> voted($user_id, $location_id))
		{
			$data['user_id'] = $user_id;
			$data['location_id'] = $location_id;
			$data['type'] = 0;
			$this -> db -> insert('votes', $data);
		}
		
		else if ($this -> return_vote($user_id, $location_id) == 1)
		{
			$data['type'] = 0;
			$this->db->where('user_id', $user_id);
			$this->db->where('location_id', $location_id);
			$this->db->update('votes', $data);
		}
	}
	
	public function counts($location_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('votes');
		$this -> db -> where('location_id', $location_id);
		
		$query = $this -> db -> get();
		$count = 0;
		
		foreach($query -> result_array() as $row)
		{
			$type = $row['type'];
			
			if($type == '0')
				$count--;
			else
				$count++;
		}
		
		return $count;
	}
}
?>