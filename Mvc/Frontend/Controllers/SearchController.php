<?php 
	include "Mvc/Frontend/Models/SearchModel.php";
	class SearchController extends Controller{
		use SearchModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$pageSize = 15;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			//goi view, truyen du lieu ra view
			return $this->renderHTML("Mvc/Frontend/Views/SearchView.php",array("data"=>$data,"numPage"=>$numPage));
		}
	}
 ?>