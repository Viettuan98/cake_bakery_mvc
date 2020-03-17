<?php 
trait ProductsModel{
		//lay danh sach cac ban ghi, phan bao nhieu ban ghi tren mot trang ($pageSize)
	public function modelFetchAll($pageSize){
			//lay bien ket noi
		$conn = Connection::getInstance();
			//--------
			//lay tong so luong ban ghi trong table
		$total = $this->modelTotalRecord();
			//tinh so trang
			//ceil(so) -> ham lay tran. VD: ceil(2.1)=3
		$numPage = ceil($total/$pageSize);
			//lay bien $p truyen tu url -> de biet duoc dang o trang nao
		$p = isset($_GET["p"])&&is_numeric($_GET["p"])?($_GET["p"]-1):0;
			//o trang $p se lay tu ban ghi nao?
		$from = $p*$pageSize;
			//truy van csdl, tra ket qua ve bien object
		$query = $conn->query("select * from products order by id desc limit $from,$pageSize");
			//lay tat ca cac ket qua tra ve
		$result = $query->fetchAll();
			//--------
			//tra ve ket qua
		return $result;
	}
		//ham lay tong so luong cac ban ghi
	public function modelTotalRecord(){
			//lay bien ket noi
		$conn = Connection::getInstance();
			//truy van csdl, tra ket qua ve bien object
		$query = $conn->query("select id from products");
			//Dem so luong ket qua -> dem so luong ban ghi
		$total = $query->rowCount();
			//--------
			//tra ve ket qua
		return $total;
	}
		//edit
	public function modelEdit($id){
			//lay bien ket noi
		$conn = Connection::getInstance();
			//chuan bi truy van
		$query = $conn->prepare("select * from products where id=:id");
			//thuc thi truy van
		$query->execute(array("id"=>$id));
			//tra ve mot phan tu
		return $query->fetch();
	}
		//do edit
	public function modelDoEdit($id){
		$name = $_POST["name"];
		$category_id = $_POST["category_id"];
		$description = $_POST["description"];
		$unit_price = $_POST["unit_price"];
		$promotion_price = $_POST["promotion_price"];
		$unit=$_POST["unit"];
		$new = isset($_POST["new"])?1:0;
			//---
			//lay bien ket noi
		$conn = Connection::getInstance();
			//chuan bi truy van
		$query = $conn->prepare("update products set name=:name,id_type=:category_id,description=:description,unit_price=:unit_price,promotion_price=:promotion_price,unit=:unit,new=:new where id=:id");
			//thuc thi truy van
		$query->execute(array("id"=>$id,"name"=>$name,"category_id"=>$category_id,"description"=>$description,"unit_price"=>$unit_price,"promotion_price"=>$promotion_price,"unit"=>$unit,"new"=>$new));
			//---
			//neu user chon file thi thuc hien upload file
		if($_FILES["img"]["name"] != ""){
				//lay ten anh
			$img = time().$_FILES["img"]["name"];
				//thuc hien upload file
			move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/Products/$img");
				//update lai cot img
			$query = $conn->prepare("update products set image=:img where id=:id");
				//thuc thi truy van
			$query->execute(array("id"=>$id,"img"=>$img));
		}
			//---
	}
			//---
		
		//do edit
	public function modelDoAdd(){
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$unit_price = $_POST["unit_price"];
			$promotion_price = $_POST["promotion_price"];
			$unit=$_POST["unit"];
			$new = isset($_POST["new"])?1:0;
			$img = "";
			//---
			//neu user chon file thi thuc hien upload file
			if($_FILES["img"]["name"] != ""){
				//lay ten anh
				$img = time().$_FILES["img"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/Products/$img");				
			}
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into products set name=:name,id_type=:category_id,description=:description,unit_price=:unit_price,promotion_price=:promotion_price,image=:img,unit=:unit,new=:new");
			//thuc thi truy van
			$query->execute(array("img"=>$img,"name"=>$name,"category_id"=>$category_id,"description"=>$description,"unit_price"=>$unit_price,"promotion_price"=>$promotion_price,"unit"=>$unit,"new"=>$new));
			//---

		}
	public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from products where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));			
		}
		public function modelGetProduct($id_type){
			//lay bien ket noi
		$conn = Connection::getInstance();
			//thuc thi truy van
		$query = $conn->query("select name from type_products where id_type=$id_type");
			//lay mot ban ghi
		return $query->fetch();
		}
	// public function modelGetnameProduct($id){
	// 	$conn = Connection::getInstance();
 //            //thuc thi truy van
	// 	$query = $conn->query("select * from type_products order by id_type=$id asc");
 //            //lay toan bo ket qua tra ve
	// 	return $query->fetchAll();
	// }
}
?>