<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function create()
	{
		$password_options = [ 'cost' => 12, ];
		$data = array(
	        'nom' => $this->input->post('nom'),
	        'prenom' => $this->input->post('prenom'),
	        'email' => $this->input->post('email'),
	        'password' => $this->input->post('password')
	    );

	    return $this->db->insert('user', $data);
	}

	public function get_logged_user()
	{
		$where_array = array(
		        'email' => $this->input->post('email'),
		        'password' => $this->input->post('password')
            );

		$query = $this->db->get_where('user', $where_array);

		if($query->num_rows() > 0) {
			return $query->first_row();
		}

		return NULL;
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */