<?php 
	class LogoutController{
		public function index(){
			//huy session
			unset($_SESSION["email"]);
			header("location:index.php?area=Backend");
		}
		
	}
 ?>