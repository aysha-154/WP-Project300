<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		 

	 $this->load->view('admin/include/header');
	 $this->load->view('admin/dashboard');
	 $this->load->view('admin/include/footer'); 

	}

	public function add_urine()
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
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-urine');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['color']=$this->input->post('color');
				$idata['apprnc']=$this->input->post('apprnc');
				$idata['gravity']=$this->input->post('gravity');
				$idata['ph']=$this->input->post('ph');
				$idata['bilirbn']=$this->input->post('bilirbn');
				$idata['nitrt']=$this->input->post('nitrt');
				$idata['type']='urine';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_urine()
	{
		$data['urine']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-urine',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_urine($id)
	{
		$this->form_validation->set_rules('color', 'color', 'required');
		$this->form_validation->set_rules('apprnc', 'apprnc', 'required');
		$this->form_validation->set_rules('gravity', 'gravity', 'required');
		$this->form_validation->set_rules('ph', 'ph', 'required');
		$this->form_validation->set_rules('bilirbn', 'bilirbn', 'required');
		$this->form_validation->set_rules('nitrt', 'nitrt', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');

		$data['urine']=$this->db->where('id',$id)->get('tbl_report')->result_array();
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-urine', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['color']=$this->input->post('color');
				$idata['apprnc']=$this->input->post('apprnc');
				$idata['gravity']=$this->input->post('gravity');
				$idata['ph']=$this->input->post('ph');
				$idata['bilirbn']=$this->input->post('bilirbn');
				$idata['nitrt']=$this->input->post('nitrt');
				$idata['type']='urine';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_blood()
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
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-blood');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				$idata['mcv']=$this->input->post('mcv');
				$idata['rbc']=$this->input->post('rbc');
				$idata['wbc']=$this->input->post('wbc');
				$idata['neutro']=$this->input->post('neutro');
				$idata['lympho']=$this->input->post('lympho');
				$idata['mono']=$this->input->post('mono');
				$idata['type']='blood';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_blood()
	{
		$data['blood']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-blood',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_blood($id)
	{
		$this->form_validation->set_rules('hb', 'hb', 'required');
		$this->form_validation->set_rules('mcv', 'mcv', 'required');
		$this->form_validation->set_rules('rbc', 'rbc', 'required');
		$this->form_validation->set_rules('wbc', 'wbc', 'required');
		$this->form_validation->set_rules('neutro', 'neutro', 'required');
		$this->form_validation->set_rules('lympho', 'lympho', 'required');
		$this->form_validation->set_rules('mono', 'mono', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');

		$data['blood']=$this->db->where('id',$id)->get('tbl_report')->result_array();		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-blood', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				$idata['mcv']=$this->input->post('mcv');
				$idata['rbc']=$this->input->post('rbc');
				$idata['wbc']=$this->input->post('wbc');
				$idata['neutro']=$this->input->post('neutro');
				$idata['lympho']=$this->input->post('lympho');
				$idata['mono']=$this->input->post('mono');
				$idata['type']='blood';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_haematology()
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
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-haematology');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				$idata['esr']=$this->input->post('esr');
				$idata['rbc']=$this->input->post('rbc');
				$idata['wbc']=$this->input->post('wbc');
				$idata['platlat']=$this->input->post('platlat');
				$idata['neutro']=$this->input->post('neutro');
				$idata['lympho']=$this->input->post('lympho');
				$idata['mono']=$this->input->post('mono');
				$idata['type']='haematology';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_haematology()
	{
		$data['haematology']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-haematology',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_haematology($id)
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
		
		$data['haematology']=$this->db->where('id',$id)->get('tbl_report')->result_array();

		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-haematology', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				$idata['esr']=$this->input->post('esr');
				$idata['rbc']=$this->input->post('rbc');
				$idata['wbc']=$this->input->post('wbc');
				$idata['platlat']=$this->input->post('platlat');
				$idata['neutro']=$this->input->post('neutro');
				$idata['lympho']=$this->input->post('lympho');
				$idata['mono']=$this->input->post('mono');
				$idata['type']='haematology';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_usg()
	{
		$this->form_validation->set_rules('bladder', 'bladder', 'required');
		$this->form_validation->set_rules('uterus', 'uterus', 'required');
		$this->form_validation->set_rules('ar', 'ar', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-usg');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['bladder']=$this->input->post('bladder');
				$idata['uterus']=$this->input->post('uterus');
				$idata['ar']=$this->input->post('ar');
				$idata['type']='usg';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_usg()
	{
		$data['usg']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-usg',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_usg($id)
	{
		$this->form_validation->set_rules('bladder', 'bladder', 'required');
		$this->form_validation->set_rules('uterus', 'uterus', 'required');
		$this->form_validation->set_rules('ar', 'ar', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		$data['usg']=$this->db->where('id',$id)->get('tbl_report')->result_array();
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-usg', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['bladder']=$this->input->post('bladder');
				$idata['uterus']=$this->input->post('uterus');
				$idata['ar']=$this->input->post('ar');
				$idata['type']='usg';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_coagulation()
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
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-coagulation');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				$idata['esr']=$this->input->post('esr');
				$idata['rbc']=$this->input->post('rbc');
				$idata['wbc']=$this->input->post('wbc');
				$idata['platlat']=$this->input->post('platlat');
				$idata['neutro']=$this->input->post('neutro');
				$idata['lympho']=$this->input->post('lympho');
				$idata['mono']=$this->input->post('mono');
				$idata['type']='coagulation';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_coagulation()
	{
		$data['coagulation']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-coagulation',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_coagulation($id)
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
		
		$data['coagulation']=$this->db->where('id',$id)->get('tbl_report')->result_array();

		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-coagulation', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['hb']=$this->input->post('hb');
				$idata['esr']=$this->input->post('esr');
				$idata['rbc']=$this->input->post('rbc');
				$idata['wbc']=$this->input->post('wbc');
				$idata['platlat']=$this->input->post('platlat');
				$idata['neutro']=$this->input->post('neutro');
				$idata['lympho']=$this->input->post('lympho');
				$idata['mono']=$this->input->post('mono');
				$idata['type']='coagulation';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_immunology()
	{
		$this->form_validation->set_rules('prolactin', 'prolactin', 'required');
		$this->form_validation->set_rules('tsh', 'tsh', 'required');
		$this->form_validation->set_rules('hbsag', 'hbsag', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-immunology');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['prolactin']=$this->input->post('prolactin');
				$idata['tsh']=$this->input->post('tsh');
				$idata['hbsag']=$this->input->post('hbsag');
				$idata['type']='immunology';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_immunology()
	{
		$data['immunology']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-immunology',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_immunology($id)
	{
		$this->form_validation->set_rules('prolactin', 'prolactin', 'required');
		$this->form_validation->set_rules('tsh', 'tsh', 'required');
		$this->form_validation->set_rules('hbsag', 'hbsag', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		$data['immunology']=$this->db->where('id',$id)->get('tbl_report')->result_array();
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-immunology', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['prolactin']=$this->input->post('prolactin');
				$idata['tsh']=$this->input->post('tsh');
				$idata['hbsag']=$this->input->post('hbsag');
				$idata['type']='immunology';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_serology()
	{
		$this->form_validation->set_rules('prolactin', 'prolactin', 'required');
		$this->form_validation->set_rules('tsh', 'tsh', 'required');
		$this->form_validation->set_rules('hbsag', 'hbsag', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-serology');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['prolactin']=$this->input->post('prolactin');
				$idata['tsh']=$this->input->post('tsh');
				$idata['hbsag']=$this->input->post('hbsag');
				$idata['type']='serology';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_serology()
	{
		$data['serology']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-serology',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_serology($id)
	{
		$this->form_validation->set_rules('prolactin', 'prolactin', 'required');
		$this->form_validation->set_rules('tsh', 'tsh', 'required');
		$this->form_validation->set_rules('hbsag', 'hbsag', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		$data['serology']=$this->db->where('id',$id)->get('tbl_report')->result_array();
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-serology', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['prolactin']=$this->input->post('prolactin');
				$idata['tsh']=$this->input->post('tsh');
				$idata['hbsag']=$this->input->post('hbsag');
				$idata['type']='serology';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function add_biochemistry()
	{
		$this->form_validation->set_rules('rbs', 'rbs', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-biochemistry');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['rbs']=$this->input->post('rbs');

				$idata['type']='biochemistry';


				$this->db->insert('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_biochemistry()
	{
		$data['biochemistry']=$this->db->get('tbl_report')->result_array();

		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-biochemistry',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_biochemistry($id)
	{
		$this->form_validation->set_rules('rbs', 'rbs', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');

		$data['biochemistry']=$this->db->where('id',$id)->get('tbl_report')->result_array();		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-biochemistry', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['rbs']=$this->input->post('rbs');
				$idata['type']='biochemistry';


				$this->db->where('id',$id);
				$this->db->update('tbl_report',$idata);

				$message='<div class="alert alert-success">Data Updated</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}







	public function view_user()
	{
		$data['user']=$this->db->where('type','user')->get('tbl_user')->result_array();


		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_user($id)
	{
		
		$data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();

		if($data['user']['0']['email']==$this->input->post('email'))
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		}
		else
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		}






		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		if ($this->form_validation->run() == FALSE)
		{
			

			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-user',$data);
			$this->load->view('admin/include/footer');

		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['password']=$this->input->post('password');
			$idata['type']='user';

			$this->db->where('id',$id);
			$this->db->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Updated</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);

		
		}	 

	}

	public function delete_user($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_user');
		
		 
		redirect('Admin/view-user');
		 
		 
	}

	public function view_contact()
	{
		$data['contact']=$this->db->get('tbl_contact')->result_array();


		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-contact',$data);
		$this->load->view('admin/include/footer');
	}

	public function delete_contact($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_contact');
		
		 
		redirect('Admin/view-contact');
		 
		 
	}


	public function view_appointment()
	{
		$data['appoint']=$this->db->get('tbl_appoint')->result_array();


		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-appointment',$data);
		$this->load->view('admin/include/footer');
	}

	public function delete_appointment($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_appoint');
		
		 
		redirect('Admin/view-appointment');
		 
		 
	}


	


	
}
