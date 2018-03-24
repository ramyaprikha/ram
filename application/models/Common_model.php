<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}


	public function get_user_accounts(){
		$query = $this->db->get('user_accounts');
		// print_r($query);die('gjkdfhj');
		return $query->result_array();
	}
}