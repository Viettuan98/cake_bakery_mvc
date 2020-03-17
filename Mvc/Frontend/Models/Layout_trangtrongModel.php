<?php 
	trait SellingModel{
		public function modelSellingProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select products.name,unit_price,promotion_price,image,SUM(number) AS TONG FROM products,tbl_order_detail WHERE products.id = tbl_order_detail.product_id GROUP BY name ORDER BY SUM(number) DESC LIMIT 0,4");
			return $query->fetchAll();
		}
	}

 ?>