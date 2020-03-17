<?php 
	//load file model
	include "Mvc/Backend/Models/NewsModel.php";
	class NewsController extends Controller{
		//khai bao de su dung NewsModel
		use NewsModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$pageSize = 10;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			//goi view, truyen du lieu ra view
			return $this->renderHTML("Mvc/Backend/Views/NewsView.php",array("data"=>$data,"numPage"=>$numPage));
		}
		
		// //edit
		// public function edit(){
		// 	//lay bien $id truyen tu url
		// 	$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		// 	//goi ham tu model de lay ban ghi tuong ung voi id truyen vao
		// 	$record = $this->modelEdit($id);
		// 	//tao bien $formAction de truyen vao action cua form
		// 	$formAction = "index.php?area=Backend&controller=News&action=doEdit&id=$id";
		// 	//goi view
		// 	$this->renderHTML("Mvc/Backend/Views/AddEditNewsView.php",array("record"=>$record,"formAction"=>$formAction));
		// }
		// //do edit
		// public function doEdit(){
		// 	//lay bien $id truyen tu url
		// 	$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		// 	//goi ham tu model de update ban ghi
		// 	$this->modelDoEdit($id);
		// 	//di chuyen den url
		// 	header("location:index.php?area=Backend&controller=News");
		// }
		// //add
		// public function add(){
		// 	//tao bien $formAction de truyen vao action cua form
		// 	$formAction = "index.php?area=Backend&controller=News&action=doAdd";
		// 	//goi view
		// 	$this->renderHTML("Mvc/Backend/Views/AddEditNewsView.php",array("formAction"=>$formAction));
		// }
		// //do add
		// public function doAdd(){
		// 	//goi ham tu model de update ban ghi
		// 	$this->modelDoAdd();
		// 	//di chuyen den url
		// 	header("location:index.php?area=Backend&controller=News");			
		// }
		// //do delete
		// public function delete(){
		// 	//lay bien $id truyen tu url
		// 	$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		// 	//goi ham tu model de update ban ghi
		// 	$this->modelDelete($id);
		// 	//di chuyen den url
		// 	header("location:index.php?area=Backend&controller=News");
		// }
	}
 ?>