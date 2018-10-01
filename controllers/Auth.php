<?php

class Auth extends CI_Controller
{
	
	public function logout()
	{
		unset($_SESSION);
		session_destroy();
		redirect("auth/login", "refresh");
	}

	public function login()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if($this->form_validation->run() == TRUE) {

				$username = $_POST['username'];
				$password = $_POST['password'];

				$this->db->select('*');
				$this->db->from('registration');
				$this->db->where(array('name' => $username, 'pass_word' => $password));
				$query = $this->db->get();

				$user = $query->row();

				if($user->email){
					$this->session->set_flashdata("success" , "You are logged in.");

					$_SESSION['user_logged'] = TRUE;
					$_SESSION['username'] = $user->name;

					redirect("user/profile", "refresh");
				}	

				else
				{
					$this->session->set_flashdata("error" , " NO DATA IN DATABASE");
					redirect("auth/login", "refresh");
				}
			}


		$this->load->view('login');
	}

	public function register()
	{

		if (isset($_POST['register']))
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');

			if($this->form_validation->run() == TRUE) {

				echo "Form Validated";


				$data = array(

					'name' => $_POST['username'],
					'email' => $_POST['email'],
					'phone' => $_POST['phone'],
					'address' => $_POST['address'],
					'gender' => $_POST['gender'],
					'pass_word' => md5($_POST['password']),
					'date_inserted' => date('Y-m-d')	

				);

				$this->db->insert('registration' , $data);

				$this->session->set_flashdata("success", "Your account has been registered!!");
				redirect("auth/register", "refresh");
			}
		}

		$this->load->view('register');
	}
}