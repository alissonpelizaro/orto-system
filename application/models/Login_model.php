<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function execLogon($usr, $key){

    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where(array(
      'login' => $usr,
      'senha' => $key,
      'status' => 1
    ));

    $user = $this->db->get()->result();

    if($user) return $user[0];
    return false;
	}

}
