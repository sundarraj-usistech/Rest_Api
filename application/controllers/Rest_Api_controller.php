<?php
header("Content-type:json");
$con = mysqli_connect("127.0.0.1", "root", "root", "testapi");

if(!$con){
die('Could not connect: '.mysqli_error());
}

$result = mysqli_query($con, "SELECT * FROM image_slider");

while($row = mysqli_fetch_assoc($result)){
$output[]=$row;
}

print(json_encode($output, JSON_PRETTY_PRINT));

mysqli_close($con);

// class Rest_Api_controller extends CI_Controller{

// 	public function __construct(){

// 		parent::__construct();
// 		$this->load->model('Rest_Api_model');

// 	}

// 	public function index(){

// 		$query['data']=$this->Rest_Api_model->fetch_All();
// 		$this->load->view('Rest_Api_view',$query);

// 	}

// }


?>