<?php 
	trait FilterModel{
		public function modelFetchAll($pageSize){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//--------
			$min = isset($_GET["min"])&&is_numeric($_GET["min"])?$_GET["min"]:0;
			$max = isset($_GET["max"])&&is_numeric($_GET["max"])?$_GET["max"]:0;
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
			$query = $conn->query("select * from products where unit_price >=$min and unit_price <= $max order by unit_price asc limit $from,$pageSize");
			//lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			//--------
			//tra ve ket qua
			return $result;
		}
		//ham lay tong so luong cac ban ghi
		public function modelTotalRecord(){
			$min = isset($_GET["min"])&&is_numeric($_GET["min"])?$_GET["min"]:0;
			$max = isset($_GET["max"])&&is_numeric($_GET["max"])?$_GET["max"]:0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			//truy van csdl, tra ket qua ve bien object
			$query = $conn->query("select id from products where unit_price >=$min and unit_price <= $max");
			//Dem so luong ket qua -> dem so luong ban ghi
			$total = $query->rowCount();
			//--------
			//tra ve ket qua
			return $total;
		}
	}
 ?>