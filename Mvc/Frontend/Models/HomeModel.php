<?php 
trait HomeModel{
	// Lay san pham moi nhat
	public function modelNewProduct(){
		$conn=Connection::getInstance();
		//chi lay cac danh muc co bai tin
		$query=$conn->query("select * from products order by id desc limit 0,8");
		return $query->fetchAll();	
	}
	public function modelHotProduct(){
		$conn=Connection::getInstance();
		//chi lay cac danh muc co bai tin
		$query=$conn->query("select * from products where new=1  order by id desc limit 1,4");
		return $query->fetchAll();
	}
	public function modeloneHotProduct(){
		$conn=Connection::getInstance();
		//chi lay cac danh muc co bai tin
		$query=$conn->query("select * from products where new=1  order by id desc limit 0,1");
		return $query->fetch();
	}
	public function modelSellingProduct(){
		$conn=Connection::getInstance();
		//chi lay cac danh muc co bai tin
		$query=$conn->query("select products.id,products.name,unit_price,promotion_price,image,SUM(number) AS TONG FROM products,tbl_order_detail WHERE products.id = tbl_order_detail.product_id GROUP BY name ORDER BY SUM(number) DESC LIMIT 0,8");
		return $query->fetchAll();
	}
	 /* Tổng giá trị giỏ hàng
		 */
		public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		    	if ($product['price']==0) {
		    		$total += $product['newprice'] * $product['number'];
		    	} else {
		    		$total += $product['price'] * $product['number'];
		    	}
		    	
		        
		    }
		    return $total;
		}
}
?>