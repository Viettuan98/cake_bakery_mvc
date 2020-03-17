<?php 
	trait ProductModel{
		public function modelDetail($id){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from products where id=:id");
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			return $query->fetch();
		}
		// public function modelFilter($id,$min,$max){
		// 	$conn = Connection::getInstance();
		// 	$query = $conn->prepare("select * from products where id_type=:$id and unit_price >=:$min and unit_price <=:$max");
		// 	$query->execute(array("id"=>$id,"min"=>$min,"max"=>$max));
		// 	//lay mot ban ghi
		// 	return $query->fetchAll();
		// }
		public function modelOtherProduct($id_other){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from products where id<>:id_other order by id desc limit 2,6");
			$query->execute(array("id_other"=>$id_other));
			//lay mot ban ghi
			return $query->fetchAll();
		}
	
		public function modelFetchAll($pageSize){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//--------
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
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
			$query = $conn->query("select * from products where id_type = $id order by id desc limit $from,$pageSize");
			//lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			//--------
			//tra ve ket qua
			return $result;
		}
		//ham lay tong so luong cac ban ghi
		public function modelTotalRecord(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			//truy van csdl, tra ket qua ve bien object
			$query = $conn->query("select id from products where id_type=$id");
			//Dem so luong ket qua -> dem so luong ban ghi
			$total = $query->rowCount();
			//--------
			//tra ve ket qua
			return $total;
		}

		public function modelIndexFetchAll($pageSize){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//--------
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
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
			$query = $conn->query("select * from products  order by id desc limit $from,$pageSize");
			//lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			//--------
			//tra ve ket qua
			return $result;
		}
		//ham lay tong so luong cac ban ghi
		public function modelIndexTotalRecord(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			//truy van csdl, tra ket qua ve bien object
			$query = $conn->query("select id from products ");
			//Dem so luong ket qua -> dem so luong ban ghi
			$total = $query->rowCount();
			//--------
			//tra ve ket qua
			return $total;
		}
	}
 ?>