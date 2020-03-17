<?php 
	trait CategoryModel{
		public function modelFetchAll(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from type_products order by id_type desc");
			return $query->fetchAll();
		}
		
		
	}
 ?>