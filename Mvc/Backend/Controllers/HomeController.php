<?php 
	class HomeController extends Controller{
		//ham tao
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			//goi view
			$this->renderHTML("Mvc/Backend/Views/HomeView.php");
		}
		
	}
 ?>