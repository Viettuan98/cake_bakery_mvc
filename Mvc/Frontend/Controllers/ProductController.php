<?php 
	include "Mvc/Frontend/Models/ProductModel.php";
	class ProductController extends Controller{
		use ProductModel;
		public function detail(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$record = $this->modelDetail($id);
			// $id_other= isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			// $data= $this->modelOtherProduct($id_other);
			// $category=$this->modelCategory($id);
			$this->renderHTML("Mvc/Frontend/Views/ProductDetailView.php",array("record"=>$record));
		}
		// public function filter(){
		// 	$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		// 	$min = isset($_GET["min"])&&is_numeric($_GET["min"])?$_GET["min"]:0;
		// 	$max = isset($_GET["max"])&&is_numeric($_GET["max"])?$_GET["max"]:0;
		// 	$record = $this->modelFilter($id,$min,$max);
		// 	// $id_other= isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		// 	// $data= $this->modelOtherProduct($id_other);
		// 	// $category=$this->modelCategory($id);
		// 	$this->renderHTML("Mvc/Frontend/Views/.php",array("record"=>$record));
		// }

		public function category(){
			//quy dinh so ban ghi tren mot trang
			$pageSize = 9;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			// $category=$this->modelNameCategory($id);
			//goi view, truyen du lieu ra view
			
			return $this->renderHTML("Mvc/Frontend/Views/ProductCategoryView.php",array("data"=>$data,"numPage"=>$numPage,));
		}
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$pageSize = 9;
			//tinh so trang hien thi
			$numPage = ceil($this->modelIndexTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelIndexFetchAll($pageSize);
			// $category=$this->modelNameCategory($id);
			//goi view, truyen du lieu ra view
			
			return $this->renderHTML("Mvc/Frontend/Views/ProductView.php",array("data"=>$data,"numPage"=>$numPage,));
		}
	}
 ?>