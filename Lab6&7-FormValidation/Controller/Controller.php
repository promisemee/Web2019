<?php 

class Controller{

	public $model;

	public function __construct(){
			$this->model = new Model();
		}
	
	public function start_page(){
		include 'View/index.php';
	}

	public function newUser(){

		$name = $_REQUEST['name_text'];
		$email = $_REQUEST['email_text'];
		$dob = $_REQUEST['dob_text'];
		$gender=$_REQUEST['select_gender'];
		$addr1 = $_REQUEST['addr1_text'];
		$addr2 = $_REQUEST['addr2_text'];
		$city = $_REQUEST['city_text'];
		$zip = $_REQUEST['zip_text'];

		if ($this->getEmail($email)){
			echo "<script type='text/javascript'>";
			echo "window.alert('You have already joined in');";
			echo "window.location.href='index.php'";
			echo "</script>";
		}

		else{
			$this->model-> insertSQL($name, $email, $dob, $gender, $addr1, $addr2, $city, $zip);
			echo "<script type='text/javascript'>";
			echo "window.alert('Join Successful');";
			echo "window.location.href='index.php'";
			echo "</script>";
		}
	}

	private function getEmail($email){
			if ($this->model->getEmail($email)->rowCount()>0)
				return True;
			else return False;
		}

}