<?php 


/**
 * 
 */
class User extends CI_Controller
{		

	public function __construct()
	{

		parent::__construct();
		
		if (!isset($_SESSION['user_logged'])){

			$this->session->set_flashdata("error", "Please log in ");
			redirect("auth/login");
		}
	}
	
	public function profile()
	{
		$this->load->view('profile');
	}
}