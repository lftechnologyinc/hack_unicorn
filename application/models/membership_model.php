<?php
class Membership_model extends CI_Model {
	function get_user_by_activation_code($code){
		$query = $this->db->where('activation_code',$code)->get('users');
		if($query && $query->num_rows())
	    {
	        return $query->row();
		}
		return FALSE;
	}

	function get_user_by_forgot_code($code){
		$query = $this->db->where('forgot_code',$code)->get('users');
		if($query && $query->num_rows())
	    {
	        return $query->row();
		}
		return FALSE;
	}

	function check_email_id($email_id){
		$query = $this->db->where('username', $email_id)->get('users');
		if($query && $query->num_rows())
	    {
	        return $query->row();
		}
		return FALSE;
	}

	function get_userdata($user_id){
		$query = $this->db->where('user_id', $user_id)->get('userdata');
		if($query && $query->num_rows())
	    {
	        return $query->row();
		}
		return FALSE;	
	}
}