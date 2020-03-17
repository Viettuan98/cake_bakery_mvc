<?php 
	trait CategoryModel{
		public function modelFetchAll($pageSize){
			$conn=Connection::getInstance();
			//lay tong so luong ban ghi trong table
			$total =$this->modelTotalRecord();
			//tinh so trang
			//ceil(so)->ham lay tran,vd ceil(2.1)=3;

			$numPage = ceil($total/$pageSize);
			//lay bien $p truyen tu url- >de biet duoc dang o trang nao
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? ($_GET["p"]-1):0;
			$from=$p*$pageSize;
			//truy van csdl

			$query = $conn->query("select *from type_products order by id_type desc limit $from,$pageSize");
			$result= $query->fetchAll();
			return $result;
		}
		//ham lay so luong cac ban ghi
		public function modelTotalRecord(){
			$conn=Connection::getInstance();
			$query = $conn->query("select id_type from type_products");
			$total= $query->rowCount();
			return $total;
		}
		//edit
		public function modelEdit($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from type_products where id_type=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve mot phan tu
			return $query->fetch();
		}
		//do edit
		public function modelDoEdit($id){
			$name = $_POST["name"];
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update type_products set name=:name where id_type=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id,"name"=>$name));
			//---
			//neu user chon file thi thuc hien upload file
			if($_FILES["img"]["name"] != ""){
				//lay ten anh
				$img = time().$_FILES["img"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/Category/$img");
				//update lai cot img
				$query = $conn->prepare("update type_products set image=:img where id_type=:id");
				//thuc thi truy van
				$query->execute(array("id"=>$id,"img"=>$img));
			}
			//---
		}
		//do add
		public function modelDoAdd(){
			$name = $_POST["name"];
			$img = "";
			//---
			//neu user chon file thi thuc hien upload file
			if($_FILES["img"]["name"] != ""){
				//lay ten anh
				$img = time().$_FILES["img"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["img"]["tmp_name"],"Assets/Upload/Category/$img");				
			}
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into type_products set name=:name,image=:img");
			//thuc thi truy van
			$query->execute(array("img"=>$img,"name"=>$name));
			//---
			
		}
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from type_products where id_type=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));			
		}
	}

 ?>