<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()	{

		if($this->session->userdata('user')) redirect("../inicio");

		$this->load->view('default/login');
	}

	public function logon(){
		$this->load->model('login_model');
		$user = $this->input->post('login');
		$senha = $this->input->post('senha');

		$logon = $this->login_model->execLogon($user, $senha);
		if($logon){
			$this->session->set_userdata('user', $logon->id);
			$this->session->set_userdata('nome', $logon->nome);
			redirect('../inicio');
		}
		redirect('../login?auth=failure');
	}
}
