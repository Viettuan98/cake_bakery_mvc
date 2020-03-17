<?php 
	trait UserModel{
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
			$query = $conn->query("select * from tbl_user order by id desc limit $from,$pageSize");
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
			$query = $conn->query("select id from tbl_user");
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
			$query = $conn->prepare("select * from tbl_user where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve mot phan tu
			return $query->fetch();
		}
		//do edit
		public function modelDoEdit($id){
			$fullname = $_POST["fullname"];
			$password = $_POST["password"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update tbl_user set fullname=:name where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id,"name"=>$fullname));
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				//chuan bi truy van
				$query = $conn->prepare("update tbl_user set password=:pass where id=:id");
				//thuc thi truy van
				$query->execute(array("id"=>$id,"pass"=>$password));
			}
		}
		//do add
		public function modelDoAdd(){
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//lay bien ket noi
			$conn = Connection::getInstance();
			//kiem tra xem email da ton tai trong csdl chua, neu chua ton tai thi insert ban ghi
			$check = $conn->prepare("select email from tbl_user where email=:email");
			$check->execute(array("email"=>$email));
			if($check->rowCount() == 0){
				//chuan bi truy van
				$query = $conn->prepare("insert into tbl_user set fullname=:name,email=:mail, password=:pass");
				//thuc thi truy van
				$query->execute(array("name"=>$fullname,"mail"=>$email,"pass"=>$password));	
				//di chuyen den url
				header("location:index.php?area=Backend&controller=User");
			}else{
				header("location:index.php?area=Backend&controller=User&action=add&email=exists");
			}	
		}
		//delete
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_user where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));			
		}
	}
 ?>