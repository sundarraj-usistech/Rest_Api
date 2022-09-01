<?php

	class TaskManagement extends CI_Controller{

		function __construct(){

			parent::__construct();
			$this->load->database('task_management');
			$this->load->model('TaskManagement_Model');
			$this->load->helper('url');
			$this->load->library('session');

			$this->load->view('Header');
			$this->load->view('Footer');

		}

		public function index(){

			if ($this->session->userdata('user_role') && $this->session->userdata('user_name')) {
				
				return TRUE;

			}
			else{

				$this->load->view('Login');

			}

		}

		public function login(){

			$data = $this->input->post();

			$credentials = array(

				'user_name' => $data['username'],
				'user_password' => $data['password']

			);

			$user_role = $this->TaskManagement_Model->login($credentials);

			if ($user_role) {
				
				$session_data = array(

					'user_name' => $data['username'],
					'user_role' => $user_role

				);

				$this->session->set_userdata($session_data);
					
				redirect(base_url()."TaskManagement/dashboard");

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

		public function logout(){

			$this->session->unset_userdata('user_role');
			$this->session->unset_userdata('user_name');
			$this->session->sess_destroy();

			redirect(base_url()."TaskManagement");

		}

		public function addEmployee(){

			if ($this->index()) {
			
				$this->load->view('Add_Employee');

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

		public function addEmployeeDetails(){

			$data = $this->input->post();

			$employee_details = array(

				'employee_name' => $data['employee_name'],
				'employee_personal_email' => $data['personal_email'],
				'employee_official_email' => $data['official_email'],
				'employee_contact_number' => $data['contact_number'],
				'employee_date_of_birth' => $data['date_of_birth'],
				'employee_date_of_joining' => $data['date_of_joining'],
				'employee_years_of_experience' => $data['years_of_experience'],
				'employee_address' => $data['address'],
				'employee_designation' => $data['designation'],
				'employee_password' => md5($data['password'])

			);

			$user_details = $this->TaskManagement_Model->addEmployeeDetails($employee_details);

			if ($this->TaskManagement_Model->addEmployeeLogin($user_details)) {
				
				redirect(base_url()."TaskManagement/dashboard");

			}

		}

		public function addProject(){

			if ($this->index()) {
				
				$this->load->view('Add_Project');

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

		public function addProjectDetails(){

			$data = $this->input->post();

			$project_details = array(

				'project_name' => $data['project_name'],
				'project_description' => $data['project_description'],
				'project_owner' => $data['project_owner']

			);

			if ($this->TaskManagement_Model->addProjectDetails($project_details)) {
				
				redirect(base_url()."TaskManagement/dashboard");

			}

		}

		public function addTask(){

			if ($this->index()) {
				
				$array = array(

					'project_name' => $this->TaskManagement_Model->getProjectName(),
					'employee_name' => $this->TaskManagement_Model->getEmployeeName()

				);

				$this->load->view('Add_Task', $array);

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

		public function addTaskDetails(){

			$data = $this->input->post();

			$task_details = array(

				'task_project_name' => $data['project_name'],
				'task_name' => $data['task_name'],
				'task_description' => $data['task_description'],
				'task_owner' => $data['task_owner'],
				'task_due_date' => $data['task_due_date'],
				'task_completed_date' => $data['task_completed_date'],
				'task_followup_date' => $data['followup_date'],
				'task_followup_comments' => $data['followup_comments'],
				'task_followed_employee' => $data['followed_employee'],
				'task_colour' => $data['task_colour']

			);

			if ($this->TaskManagement_Model->addTaskDetails($task_details)) {
				
				redirect(base_url()."TaskManagement/dashboard");

			}

		}

		public function dashboard(){

			if ($this->index()) {
				
				$array = array(

					'task_details' => $this->TaskManagement_Model->getTaskDetails()
				);

				$this->load->view('Dashboard', $array);

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

		public function searchWithKeyword(){

			if ($this->index()) {
				
				$keyword = $this->input->post('search_with_keyword'); 

				$data = array(

					'task_details' => $this->TaskManagement_Model->searchWithKeyword($keyword)

				);

				$this->load->view('Dashboard', $data);

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

		public function searchWithDueDate(){

			if ($this->index()) {
				
				$due_date = $this->input->post('search_with_due_date');

				$data = array(

					'task_details' => $this->TaskManagement_Model->searchWithDueDate($due_date)

				);

				$this->load->view('Dashboard', $data);

			}
			else{

				redirect(base_url()."TaskManagement");

			}

		}

	}

?>