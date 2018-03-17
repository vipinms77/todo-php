<?php 
/**
 * @[params] = string 
 * @[return] = boolean
 */
class TodoModel extends CI_Model {

	public function checkLogin($credentials){
		$this->db->select('password');
		$this->db->where('username',$credentials['username']);
		$query = $this->db->get('todo-login');
		if(!empty($query->result())){
			return $query->result();
		} else {
			return false;
		}
	}
}	
