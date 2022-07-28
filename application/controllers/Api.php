<?php

// if(!isset($_SERVER['HTTP_REFERER'])){

// 	log_message('error','Direct URL access');
//  die();

// }

class Api extends CI_Controller{

	public function __construct(){

		parent::__construct();

		header("Content-Type: json");
		header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");

		$this->load->model('Student_Model');

		// date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

	}

	public function index(){

		$request['request_method']=$_SERVER["REQUEST_METHOD"];
		$request['url']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$request['hostname']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_HOST);
		$request['username']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_USER);
		$request['status']=http_response_code();

		return $request;
		
	}

	public function login(){

		$request=$this->index();

		if($request['status']==200 && $request['request_method']=='POST'){

			$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[30]|is_unique[users.username]');
			$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[50]');
			
			if($this->form_validation->run() == TRUE){

				$data=json_encode($this->input->post());
				$query=$this->Student_Model->login($data);

				if($query){

					log_message('debug', strip_tags(trim('Api - Data Inserted Successfully')));

				}

			}
			else{

				log_message('error', 'Api - Insertion Error - '.strip_tags(trim(validation_errors())));

				$this->load->view('Login_View',validation_errors());

			}
			
		}

	}

	public function display(){

		$request=$this->index();

		if($request['status']==200 && $request['request_method']=='POST'){

			$query=$this->Student_Model->display();
				
			if($query){ 

				$response=$query;
				echo json_encode($response);

			}
			else{

				$response="error";				
				echo json_encode($response);

			}

		}

	}

	public function insert(){

		$request=$this->index();	

		if($request['status']==200 && $request['request_method']=='POST'){

			$data=file_get_contents('php://input');

			$data=json_decode($data, true);print_r($data);exit;
	
							
			if($data){

				$query=$this->Student_Model->insert($data);

				if ($query) {

					$response=array(

						'status'=>"success",
						'code'=>http_response_code(200)

					);
					
					echo json_encode($response);

				}
				else{

					$response=array(

						'status'=>"failed",
						'code'=>http_response_code(500)

					);
					
					echo json_encode($response);

				}

			}

		}
			
	}

	public function delete(){

		$request=$this->index();

		if($request['status']==200){

			$data=$_REQUEST['id'];echo $data;exit;
			$query=$this->Student_Model->delete($data);

			if($query){

				echo "Successfull";
				log_message('debug', strip_tags(trim('Api - Data Deleted Successfully')));

			}

		}
		else{

			log_message('error', strip_tags(trim('Api - Data cannot be deleted')));
			die;

		}
			
	}

}

?>