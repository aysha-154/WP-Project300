<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct() {
        parent::__construct();

		//date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('username'))){
			redirect(base_url('Login'));
		}else{
		
		}


    }


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
			$this->load->view('include/header1');
			$this->load->view('home1');

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

	public function reports()
	{
	
	 $this->load->view('include/header1');
	 $this->load->view('report');
	 //$this->load->view('include/footer1');

	}

	

	public function urine()
	{
	
		$this->form_validation->set_rules('color', 'color', 'required');
		$this->form_validation->set_rules('apprnc', 'apprnc', 'required');
		$this->form_validation->set_rules('gravity', 'gravity', 'required');
		$this->form_validation->set_rules('ph', 'ph', 'required');
		$this->form_validation->set_rules('bilirbn', 'bilirbn', 'required');
		$this->form_validation->set_rules('nitrt', 'nitrt', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('urine');
			
		}else{
			
				$idata['ph']=$this->input->post('ph');
				if($idata['ph']< "4.5")
				{
					$message='<div class="alert alert-warning">Results : Infection<br>Instructions : Urine is typically unclear. Cloudiness or an unusual odor may indicate a problem, such as an infection. So drink more water.</div>';
				}
			    else if ($idata['ph']< "8.0")
			    { 
			    	$message='<div class="alert alert-warning">Results : Abnormal<br>Instructions : Abnormal pH levels may indicate a kidney or urinary tract disorder. Consult with your doctor for further treatment.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal<br>Description : A measure of concentration, or specific gravity, shows how concentrated particles are in your urine. A higher than normal concentration often is a result of not drinking enough fluids.</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		}

	}

	public function blood()
	{
		$this->form_validation->set_rules('hb', 'hb', 'required');
		$this->form_validation->set_rules('mcv', 'mcv', 'required');
		$this->form_validation->set_rules('rbc', 'rbc', 'required');
		$this->form_validation->set_rules('wbc', 'wbc', 'required');
		$this->form_validation->set_rules('neutro', 'neutro', 'required');
		$this->form_validation->set_rules('lympho', 'lympho', 'required');
		$this->form_validation->set_rules('mono', 'mono', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('blood');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				if($idata['hb']< "11.5")
				{
					$message='<div class="alert alert-danger">Results : Sign of anemia<br>Instructions : Your body shows low hematocrit and it can be a sign of anemia, blood loss, or a vitamin deficiency. A spike could be from dehydration or liver or heart disease.Take vitamin B-12 to recover from this.</div>';
				}
			    else if ($idata['hb']< "13.5")
			    { 
			    	$message='<div class="alert alert-warning">Results : Diabetes Syntom<br>Instructions : Your body produces more WBCs when you have an infection or allergic reaction.Seems you have diabetes syntom so avoid sweetened food.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal<br>Description : Your blood test results shows that you have no infections and allergies or diagnose potential diseases and conditions such as anemia and leukemia.</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function haematology()
	{
		$this->form_validation->set_rules('hb', 'hb', 'required');
		$this->form_validation->set_rules('esr', 'esr', 'required');
		$this->form_validation->set_rules('rbc', 'rbc', 'required');
		$this->form_validation->set_rules('wbc', 'wbc', 'required');
		$this->form_validation->set_rules('platlat', 'platlat', 'required');
		$this->form_validation->set_rules('neutro', 'neutro', 'required');
		$this->form_validation->set_rules('lympho', 'lympho', 'required');
		$this->form_validation->set_rules('mono', 'mono', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('haematology');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				if($idata['hb']< "11.5")
				{
					$message='<div class="alert alert-danger">Results : Sign of anemia<br>Instructions : Your body shows low hematocrit and it can be a sign of anemia, blood loss, or a vitamin deficiency. A spike could be from dehydration or liver or heart disease.Take vitamin B-12 to recover from this.</div>';
				}
			    else if ($idata['hb']< "13.5")
			    { 
			    	$message='<div class="alert alert-warning">Results : Diabetes Syntom<br>Instructions : Your body produces more WBCs when you have an infection or allergic reaction.Seems you have diabetes syntom so avoid sweetened food.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal<br>Description : Your blood test results shows that you have no infections and allergies or diagnose potential diseases and conditions such as anemia and leukemia.</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function usg()
	{
		$this->form_validation->set_rules('bladder', 'bladder', 'required');
		$this->form_validation->set_rules('uterus', 'uterus', 'required');
		$this->form_validation->set_rules('ar', 'ar', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('usg');
			
		}else{
			
				$idata['uterus']=$this->input->post('uterus');
				if($idata['uterus']< "3.8")
				{
					$message='<div class="alert alert-warning">Results : Smaller in size (Miscarriage Risk)<br>Instructions : a unicornuate uterus is usually smaller in size and less able to accommodate a growing baby. This effect can increase the risk for second-trimester miscarriage. Women with a unicornuate uterus also often experience problems with the cervix.</div>';
				}
			    else if ($idata['uterus']> "7.5")
			    { 
			    	$message='<div class="alert alert-warning">Results : Bigger in size ( Fibroids)<br>Instructions : Symptoms of Fibroids.An enlarged uterus can be the result of a medical condition that not only causes it to grow but also to bleed and become painful. A condition that results in an enlarged uterus may require treatment.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal in Size<br>Description : Looks like everything is fine. Aimed at the difficult segmentation of ultrasonic tumor image with strong speckle noise, low contrast and weak boundaries, a novel method for segmentation of ultrasonic image is proposed</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function coagulation()
	{
		$this->form_validation->set_rules('hb', 'hb', 'required');
		$this->form_validation->set_rules('esr', 'esr', 'required');
		$this->form_validation->set_rules('rbc', 'rbc', 'required');
		$this->form_validation->set_rules('wbc', 'wbc', 'required');
		$this->form_validation->set_rules('platlat', 'platlat', 'required');
		$this->form_validation->set_rules('neutro', 'neutro', 'required');
		$this->form_validation->set_rules('lympho', 'lympho', 'required');
		$this->form_validation->set_rules('mono', 'mono', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('coagulation');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				if($idata['hb']< "11.5")
				{
					$message='<div class="alert alert-danger">Results : Sign of anemia<br>Instructions : Your body shows low hematocrit and it can be a sign of anemia, blood loss, or a vitamin deficiency. A spike could be from dehydration or liver or heart disease.Take vitamin B-12 to recover from this.</div>';
				}
			    else if ($idata['hb']< "13.5")
			    { 
			    	$message='<div class="alert alert-warning">Results : Diabetes Syntom<br>Instructions : Your body produces more WBCs when you have an infection or allergic reaction.Seems you have diabetes syntom so avoid sweetened food.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal<br>Description : Your blood test results shows that you have no infections and allergies or diagnose potential diseases and conditions such as anemia and leukemia.</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function immunology()
	{
		$this->form_validation->set_rules('prolactin', 'prolactin', 'required');
		$this->form_validation->set_rules('tsh', 'tsh', 'required');
		$this->form_validation->set_rules('hbsag', 'hbsag', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('immunology');
			
		}else{
			
				$idata['tsh']=$this->input->post('tsh');
				if($idata['tsh']< "0.40")
				{
					$message='<div class="alert alert-warning">Results : Abnormal glucose level<br>Instructions : Schedule your blood work for first thing in the morning, if possible, to avoid “the hangries,” which are a legit problem.</div>';
				}
			    else if ($idata['tsh']> "4")
			    { 
			    	$message='<div class="alert alert-danger">Results : Cholesterol<br>Instructions : It’s a fat that transports cholesterol to parts of your body in need of cell repair. But it can also build up on the inside of arteries, so try to avoid fat and oily food.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal<br>Description : At Greatist, we’re not cool with body-negative “fat talk.” But talking about your lipids in your blood work is totally fair game.</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function serology()
	{
		$this->form_validation->set_rules('prolactin', 'prolactin', 'required');
		$this->form_validation->set_rules('tsh', 'tsh', 'required');
		$this->form_validation->set_rules('hbsag', 'hbsag', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('serology');
			
		}else{
			
				$idata['tsh']=$this->input->post('tsh');
				if($idata['tsh']< "0.40")
				{
					$message='<div class="alert alert-warning">Results : Abnormal glucose level<br>Instructions : Schedule your blood work for first thing in the morning, if possible, to avoid “the hangries,” which are a legit problem.</div>';
				}
			    else if ($idata['tsh']> "4")
			    { 
			    	$message='<div class="alert alert-danger">Results : Cholesterol<br>Instructions : It’s a fat that transports cholesterol to parts of your body in need of cell repair. But it can also build up on the inside of arteries, so try to avoid fat and oily food.</div>';
				}
			    else{ 
			    	$message='<div class="alert alert-success">Results : Normal<br>Description : At Greatist, we’re not cool with body-negative “fat talk.” But talking about your lipids in your blood work is totally fair game.</div>';
			    }

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function biochemistry()
	{
		$this->form_validation->set_rules('rbs', 'rbs', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header1');
			$this->load->view('biochemistry');
			
		}else{
			
				$idata['rbs']=$this->input->post('rbs');
				if($idata['rbs']< "7.8")
				{
					$message='<div class="alert alert-warning">Results : Hypoglycemia<br>Instructions : The body works continuously to keep the amount of blood glucose at optimum levels. It produces a hormone called insulin to achieve this, which helps glucose get into the cells that need it for energy.</div>';
				}
			    else if ($idata['rbs']>= "7.8")
			    { 
			    	$message='<div class="alert alert-danger">Results : Hyperglycaemia<br>Instructions : Hyperglycemia occurs when levels remain consistently high.You have higher than expected glucose levels, the doctor will usually order a follow-up test to confirm the diagnosis.</div>';
				}
			    

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	
}
