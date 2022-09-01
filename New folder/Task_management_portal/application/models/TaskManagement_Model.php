<?php 

	class TaskManagement_Model extends CI_Model{

		public function __construct(){

			parent::__construct();

		}

		public function login($credentials){

			$this->db->select('user_password, user_role');
			$this->db->where('user_name', $credentials['user_name']);
			$query = $this->db->get('table_users')->row_array();

			if($query){

				if($query['user_password'] == md5($credentials['user_password'])){

					return $query['user_role'];

				}
				else{

					return FALSE;

				}

			}
			else{

				return FALSE;

			}

		}

		public function addEmployeeDetails($employee_details){

			if ($this->db->insert('table_employees', $employee_details)) {
				
				return array(

					'user_name' => $employee_details['employee_official_email'], 
					'user_password' => $employee_details['employee_password'],
					'user_role' => 2
				
				);

			}

		}

		public function addEmployeeLogin($user_details){

			if ($this->db->insert('table_users', $user_details)) {
				
				return TRUE;

			}

		}

		public function addProjectDetails($project_details){

			if ($this->db->insert('table_projects', $project_details)) {
				
				return TRUE;

			}

		}

		public function getProjectName(){

			$this->db->select('project_name');
			$this->db->distinct();
			$query = $this->db->get('table_projects');
			$result = $query->result();

			return $result;

		}

		public function getEmployeeName(){

			$this->db->select('employee_name');
			$this->db->distinct();
			$query = $this->db->get('table_employees');
			$result = $query->result();

			return $result;

		}

		public function addTaskDetails($task_details){

			if ($this->db->insert('table_tasks', $task_details)) {
				
				return TRUE;


			}

		}

		public function getTaskDetails(){

			$this->db->select('task_name, task_description');
			$this->db->distinct();
			$query = $this->db->get('table_tasks');
			$result = $query->result();

			return $result;

		}

		public function searchWithKeyword($keyword){

			$this->db->select('task_name, task_description');
			$this->db->like('task_project_name',$keyword);
			$this->db->or_like('task_name', $keyword);
			$this->db->or_like('task_description', $keyword);
			$this->db->or_like('task_owner', $keyword);
			$this->db->or_like('task_followup_comments', $keyword);
			$this->db->or_like('task_followed_employee', $keyword);
			$this->db->or_like('task_colour', $keyword);
			$query = $this->db->get('table_tasks');
			$result = $query->result();

			return $result;

		}

		public function searchWithDueDate($due_date){

			$this->db->select('task_name, task_description');
			$this->db->like('task_due_date', $due_date);
			$query = $this->db->get('table_tasks');
			$result = $query->result();

			return $result;

		}

	}

 ?>