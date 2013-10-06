<?php 
class Login_model extends CI_Model {
	
	function authenticate($username, $password)
	{
		$qry = "SELECT * FROM users WHERE username = ? AND password = ?";
		$res = $this->db->query($qry, array($username, $password));
		return $res->row_array();
	}
	
	function updateIdentity($data)
	{
		$update = array('updated'=>date('Y-m-d H:i:s'));
		$this->db->where('user_id', $data['user_id']);
		$res = $this->db->update('users', $data+$update);
		$this->setUpdate($data['user_id']);
		return $res;
	}
	
	private function setUpdate($id)
	{
		$qry = "UPDATE users SET updated = NOW() WHERE user_id = ?";
		$this->db->query($qry, $id);
	}
	
	function newUser($data)
	{
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}
	
	// get admins autoresponder code
	function getAdminResponder()
	{
		// get admin account
		$qry = "SELECT 
						  p1.`responder` 
						FROM
						  users u 
						LEFT JOIN user_pages up
						ON up.`user_id` = u.`user_id`
						LEFT JOIN pages1 p1
						ON p1.`page_id` = up.`page_id`
						WHERE u.`user_type` = 1 
						AND up.`order` = 1
						GROUP BY up.`page_id`";
		$responder = $this->db->query($qry);
		$responder = $responder->row_array();
		return $responder;
	}
	
	function logUserLogin($data)
	{
		$this->db->insert('user_logs', $data);
	}
	
	function getAdminAutoResponder()
	{
		$responder = $this->db->query("SELECT * from user_autoresponder WHERE responder_id_PK = '1'");
		return $responder->row();
	}
	
	function getAdmin()
	{
		$qry = "SELECT 
					  u.`user_id`,
					  u.`username`,
					  u.`email`,
					  up.`first_name`,
					  up.`last_name`, 
					  up.`mi`,
					  up.`phone`,
					  up.`skypeid`
					FROM
					  users u 
					LEFT JOIN user_profile up
						ON up.`user_id` = u.`user_id`
					WHERE u.`user_type` = 1";
		$res = $this->db->query($qry);
		return $res->row_array();
	}
	
	function getUserDetails($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get("users");
		return $query->row();
	}
	
	// rynelle
	function getUserEmail($searchData)
	{
		
		$this->db->select('u.user_id, u.email, u.profile_pic, up.first_name, up.last_name');
		$this->db->join('user_profile up', 'up.user_id = u.user_id'); 
		$this->db->where('u.user_id !=', 1);
		
		if ( !empty($searchData) ) {
			$this->db->like('email', 		 $searchData);
			$this->db->or_like('first_name', $searchData);
			$this->db->or_like('last_name',  $searchData);
		}
		
		$query = $this->db->order_by("up.first_name", "ASC"); 
		$query = $this->db->get("users u");
		return $query->result_array();
	}
	
}
?>