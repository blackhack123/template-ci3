<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
 
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

	public function auth(){
	    $usuario    = $this->input->post('usuario',TRUE);
	    $clave 		= md5($this->input->post('clave',TRUE));
	    $validate 	= $this->login_model->validate($usuario,$clave);
	    if($validate->num_rows() > 0){
	        $data  	= $validate->row_array();
	        $name  	= $data['usuario'];
	        $level 	= $data['perfil_id'];
	        $sessionData = array(
	            'username'  => $name,
	            'level'     => $level,
	            'logged_in' => TRUE
	        );
	        $this->session->set_userdata($sessionData);
	        // access admin
	        if($level === '1'){
	            redirect('home');
	        // access tech
	        }elseif($level === '2'){
	            redirect('page/staff');
	        // access secretary
	        }elseif($level === '3'){
	            redirect('page/staff');
	        // access merchant
	        }else{
	            redirect('page/author');
	        }
	    }else{
	        echo $this->session->set_flashdata('msg','Usuario ó Clave incorrectos');
	        redirect('login');
	    }
  	}

	public function logout(){
	  $this->session->sess_destroy();
	  redirect('login');
	}

}
