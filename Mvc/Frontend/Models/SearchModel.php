<?php 
	trait SearchModel{
		public function modelFetchAll($pageSize){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//--------
			$key = isset($_GET["key"])?$_GET["key"]:"";
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
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit $from,$pageSize");
			//lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			//--------
			//tra ve ket qua
			return $result;
		}
		//ham lay tong so luong cac ban ghi
		public function modelTotalRecord(){
			$key = isset($_GET["key"])?$_GET["key"]:"";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//truy van csdl, tra ket qua ve bien object
			$query = $conn->query("select id from products where name like '%$key%'");
			//Dem so luong ket qua -> dem so luong ban ghi
			$total = $query->rowCount();
			//--------
			//tra ve ket qua
			return $total;
		}
	}
 ?>