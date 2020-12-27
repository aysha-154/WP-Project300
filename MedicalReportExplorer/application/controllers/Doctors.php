<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {


	public function index()
	{
	
	 $this->load->view('include/header');
	 $this->load->view('Dinfo');

	}

	public function info()
	{
	
	 $this->load->view('include/header1');
	 $this->load->view('Dinfo');

	}

	
	
}
