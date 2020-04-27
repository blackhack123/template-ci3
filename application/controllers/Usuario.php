<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('usuarios/usuario');
		$this->load->view('footer');
		
	}

}
