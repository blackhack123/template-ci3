<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login/login');
	}

	public function recuperarClave()
	{
		$this->load->view('login/recordar');
	}


	public function confirmarCorreo()
	{
		$this->load->view('login/confirmar');
	}

}
