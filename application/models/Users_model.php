<?php

/**
* 
*/
class Users_model extends CI_Model
{
	
		public function registration($data) {

		
		try{
			$this->db->insert('users', $data);
		}catch(Excemption $e){
			return $e;
		}

	}

	function getUsers()
		{

		$this->db->select('*');
		$this->db->from('users');
		 $this->db->order_by('user_id', 'asc');
		$result = $this->db->get();
		       return $result->result();
		}

	function getUserarticles()
		{

		$this->db->select('*');
		$this->db->from('news');
		 $this->db->order_by('news_id', 'asc');
		$result = $this->db->get();
		       return $result->result();
		}


	
	public function form($image_data) {

        $this->db->insert('users', $image_data);

        $image_data['profile_pic']  = $this->db->insert_id();

        $this->db->insert('images', $image_data);
    }

}

?>