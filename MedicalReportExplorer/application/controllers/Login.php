<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		$this->form_validation->set_message('valid_email', 'The Email is incorrect');

		if ($this->form_validation->run() == FALSE)
		{
			 $this->load->view('include/header');
			 $this->load->view('login');
			
		}else{
			
				$mail=$this->input->post('email');
				$pass=$this->input->post('password');

				$chck=$this->db->where('email',$mail)->where('password',$pass)->get('tbl_user')->result_array();




				if(!empty($chck))
				{

					$value['type']=$chck[0]['type'];
					$value['username']=$chck[0]['name'];
					$value['id']=$chck[0]['id'];



					$this->session->set_userdata($value);
					

					if($value['type']=="admin")
					{
						
						$message='<div class="alert alert-success">Logged In Successfully as a Admin.</div>';

					    $this->session->set_flashdata('success',$message);

						redirect(base_url('Admin'));
					}
					else
					{
						
						

						redirect(base_url('Report'));
					}

					
				}
				
				else
				{
					$message='<div class="alert alert-danger">Your Email or Password is incorrect.</div>';

				    $this->session->set_flashdata('success',$message);

					redirect($_SERVER['HTTP_REFERER']);
				}

				
			
			
		}







		

	}

	public function signup()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header');
			$this->load->view('signup');

		}else{
			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['password']=$this->input->post('password');
			$idata['type']='user';


			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Signed Up Successfully</div>';

			$this->session->set_flashdata('success',$message);

			redirect(base_url('Login'));
		}

	}

	
	
}
