<?php

class M_login extends CI_Controller
{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
