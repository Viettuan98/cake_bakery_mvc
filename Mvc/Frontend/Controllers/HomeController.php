<?php 
include "Mvc/Frontend/Models/HomeModel.php";
class HomeController extends Controller{
	use HomeModel;
	public function index(){
		$hotProduct = $this->modelHotProduct();
		$newProduct = $this->modelNewProduct();
		$sellingProduct=$this->modelSellingProduct();
		$onehotProduct = $this->modeloneHotProduct();
		$this->renderHTML("Mvc/Frontend/Views/HomeView.php",["hotProduct"=>$hotProduct,"newProduct"=>$newProduct,"sellingProduct"=>$sellingProduct,"onehotProduct"=>$onehotProduct]);
	}
}
?>