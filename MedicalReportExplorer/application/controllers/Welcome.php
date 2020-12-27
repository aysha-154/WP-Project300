<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
	
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
		$this->form_validation->set_rules('date', 'Appointment Date', 'required');
		$this->form_validation->set_rules('doctor', 'Doctor', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header');
			$this->load->view('home');

		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['date']=date('Y-m-d',strtotime($this->input->post('date')));
			$idata['doctor']=$this->input->post('doctor');
			if(!empty($this->input->post('message')))
			{
				$idata['message']=$this->input->post('message');
			}
			

			

			$this->db->insert('tbl_appoint',$idata);

			$message='<div class="alert alert-success">Appointment Request Delivered Successfully. We will let you know soon.</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);

		
		}

	}

	

	public function contact()
	{
	
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact');

		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['subject']=$this->input->post('subject');
			$idata['message']=$this->input->post('message');

			

			$this->db->insert('tbl_contact',$idata);

			$message='<div class="alert alert-success">Delivered Successfully</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);

		
		}

	}


	
}
