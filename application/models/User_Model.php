<?php
	/**
	 * User model
	 */
	class User_Model extends CI_Model
	{
		
		public function __construct(){
			parent::__construct();
		}
		public function register_user($userData = array()){
			$result = $this->db->insert('users',$userData);
			if($result){
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function login_user($login_user = array()){
			$where = array(
				'email' => $login_user['email'],
				'password' => $login_user['password']
			);
			$this->db->select('email,password');
			$this->db->where($where);
			$user = $this->db->get('users');
			return $user->result();
		}
	}
?>