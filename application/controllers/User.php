<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['content'] = $this->load->view('home', '', TRUE);
		$this->load->view('template', $data);
	}

	public function register()
	{
		$data['title'] = 'Inscription';

	    $this->form_validation->set_rules('nom', 'Nom', 'required|min_length[3]');
	    $this->form_validation->set_rules('prenom', 'Prénom', 'required|min_length[3]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
	    $this->form_validation->set_rules('password', 'Mot de passe', 'required|min_length[6]');

	    if ($this->form_validation->run() === FALSE) {
	    	$extra['errors'] = validation_errors();
	    }else {
	    	$this->user_model->create();
	    	$extra['success'] = "Profile crée avec succés";
	    }

    	$data['content'] = $this->load->view('user/register', $extra, TRUE);
		$this->load->view('template', $data);
	}

	public function login()
	{
		$data['title'] = 'Connection';

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('password', 'Mot de passe', 'required');

	    $ectra = "";
	    if ($this->form_validation->run() === FALSE) {
	    	$extra['errors'] = validation_errors();
	    }else {
	    	$user = $this->user_model->get_logged_user();
	    	if ($user === NULL) {
	    		$extra['errors'] = "Mot de passe ou Email Incorrecte";
	    	}else{
	    		$session_data = array(
				        'user'  => $user,
				        'logged_in' => TRUE
				);

				$this->session->set_userdata($session_data);
				redirect('/', 'refresh');
	    	}
	    }

		$data['content'] = $this->load->view('user/login', $extra, TRUE);
		$this->load->view('template', $data);
	}

	public function logout()
	{
		if ($this->is_logged_in()) {
			$session_data = array(
			        'user'  => '',
			        'logged_in' => FALSE
			);
			$this->session->unset_userdata($session_data);
			redirect('login', 'refresh');
		}
	}

	public function is_logged_in()
	{
		$user = $this->session->has_userdata('user');
		return isset($user);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */