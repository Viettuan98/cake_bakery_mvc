<?php 
	include "Mvc/Frontend/Models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		//ham tao
		public function __construct(){
			//neu gio hang chua ton tai thi khoi tao gio hang
			if(isset($_SESSION["cart"]) == false)
				$_SESSION["cart"] = array();
		}
		//hien thi gio hang
		public function index(){
			//load view
			$this->renderHTML("Mvc/Frontend/Views/CartView.php");
		}
		//them moi gio hang
		public function add(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//goi ham them sp vao gio hang (trong model)
			$this->cartAdd($id);
			//quay tro lai trang gio hang
			header("location:Cart");
		}
		//xoa san pham khoi gio hang
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//goi ham cartDeleten trong model
			$this->cartDelete($id);
			//quay tro lai trang gio hang
			header("location:Cart");
		}
		//xoa toan bo gio hang
		public function destroy(){
			$this->cartDestroy();//ham nay trong model
			//quay tro lai trang gio hang
			header("location:Cart");
		}
		//cap nhat so luong tung san pham
		public function update(){
			//duyet cac san pham trong session array de update
			foreach($_SESSION["cart"] as $product){
				$name = "product_".$product["id"];
				$quantity = $_POST[$name];
				$this->cartUpdate($product["id"],$quantity);
			}
			//quay tro lai trang gio hang
			header("location:Cart");
		}
		//thanh toan gio hang
		public function checkout(){
			$this->renderHTML("Mvc/Frontend/Views/CheckoutView.php");
		}
		//khi an nut submit thanh toan
		public function doCheckout(){
			$this->cartCheckOut();
			//quay tro lai trang gio hang
			header("location:Cart");
		}
	}
 ?>