<?php

class Rest_Api_controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('Rest_Api_model');

	}

	public function index(){

		$query['data']=$this->Rest_Api_model->fetch_All();
		$this->load->view('Rest_Api_view',$query);

	}

}

?>