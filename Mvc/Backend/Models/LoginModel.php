<?php 
	trait LoginModel{
		public function modelFetch(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//chuan bi truy van
			$query = $conn->prepare("select email from tbl_user where email=:email and password=:password");
			//thuc thi truy van, truyen du lieu vao cac bien
			$query->execute(array("email"=>$email,"password"=>$password));
			//lay mot ban ghi
			$result = $query->fetch();
			if(isset($result->email)){
				//dang nhap thanh cong
				$_SESSION["email"] = $email;
			}
			header("location:index.php?area=Backend");
		}
	}
 ?>