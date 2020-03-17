<?php 
	trait NewsModel{
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
			$query = $conn->query("select * from news order by id desc limit $from,$pageSize");
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
			$query = $conn->query("select id from news");
			//Dem so luong ket qua -> dem so luong ban ghi
			$total = $query->rowCount();
			//--------
			//tra ve ket qua
			return $total;
		}
		// //edit
		// public function modelEdit($id){
		// 	//lay bien ket noi
		// 	$conn = Connection::getInstance();
		// 	//chuan bi truy van
		// 	$query = $conn->prepare("select * from tbl_news where id=:id");
		// 	//thuc thi truy van
		// 	$query->execute(array("id"=>$id));
		// 	//tra ve mot phan tu
		// 	return $query->fetch();
		// }
		// //do edit
		// public function modelDoEdit($id){
		// 	$name = $_POST["name"];
		// 	$category_id = $_POST["category_id"];
		// 	$description = $_POST["description"];
		// 	$content = $_POST["content"];
		// 	$hotnews = isset($_POST["hotnews"])?1:0;
		// 	//---
		// 	//lay bien ket noi
		// 	$conn = Connection::getInstance();
		// 	//chuan bi truy van
		// 	$query = $conn->prepare("update tbl_news set name=:name,category_id=:category_id,description=:description,content=:content,hotnews=:hotnews where id=:id");
		// 	//thuc thi truy van
		// 	$query->execute(array("id"=>$id,"name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"hotnews"=>$hotnews));
		// 	//---
		// 	//neu user chon file thi thuc hien upload file
		// 	if($_FILES["img"]["name"] != ""){
		// 		//lay ten anh
		// 		$img = time().$_FILES["img"]["name"];
		// 		//thuc hien upload file
		// 		move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/News/$img");
		// 		//update lai cot img
		// 		$query = $conn->prepare("update tbl_news set img=:img where id=:id");
		// 		//thuc thi truy van
		// 		$query->execute(array("id"=>$id,"img"=>$img));
		// 	}
		// 	//---
		// }
		// //do edit
		// public function modelDoAdd(){
		// 	$name = $_POST["name"];
		// 	$category_id = $_POST["category_id"];
		// 	$description = $_POST["description"];
		// 	$content = $_POST["content"];
		// 	$hotnews = isset($_POST["hotnews"])?1:0;
		// 	$img = "";
		// 	//---
		// 	//neu user chon file thi thuc hien upload file
		// 	if($_FILES["img"]["name"] != ""){
		// 		//lay ten anh
		// 		$img = time().$_FILES["img"]["name"];
		// 		//thuc hien upload file
		// 		move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/News/$img");				
		// 	}
		// 	//---
		// 	//lay bien ket noi
		// 	$conn = Connection::getInstance();
		// 	//chuan bi truy van
		// 	$query = $conn->prepare("insert into tbl_news set name=:name,category_id=:category_id,description=:description,content=:content,hotnews=:hotnews,img=:img");
		// 	//thuc thi truy van
		// 	$query->execute(array("img"=>$img,"name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"hotnews"=>$hotnews));
		// 	//---
			
		// }
		// public function modelDelete($id){
		// 	//lay bien ket noi
		// 	$conn = Connection::getInstance();
		// 	//chuan bi truy van
		// 	$query = $conn->prepare("delete from tbl_news where id=:id");
		// 	//thuc thi truy van
		// 	$query->execute(array("id"=>$id));			
		// }
		// public function modelGetCategory($category_id){
		// 	//lay bien ket noi
		// 	$conn = Connection::getInstance();
		// 	//thuc thi truy van
		// 	$query = $conn->query("select name from tbl_category where category_id=$category_id");
		// 	//lay mot ban ghi
		// 	return $query->fetch();
		// }
	}
 ?>