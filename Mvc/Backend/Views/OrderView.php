<?php 
    //ket thua layout1.php de load vao day
    $this->layout = "Mvc/Backend/Views/Layout.php";
 ?>  
 <div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Trang Chủ <i class="mdi mdi-shuffle-disabled"></i>Đơn hàng</h3>

    </div>                
<div class="col-md-12">    
    <div class="card ">
        
        <div class="card-body" style="overflow: auto;">
            <h4 class="card-title">Danh sách Đơn hàng</h4>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Create</th>
                    <th>Status</th>
                    <th style="width:100px;"></th>
                </tr>
                </thead>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->fullname; ?></td>
                    <td><?php echo $rows->email; ?></td>
                    <td><?php echo $rows->phone; ?></td>
                    <td><?php echo $rows->address; ?></td>
                    <td><?php echo $rows->create_at; ?></td>
                    <td>
                    	<?php 
                    		if($rows->status==0)
                    			echo "Chưa giao hàng";
                    		else
                    			echo "Đã giao hàng";
                    	 ?>
                    </td>
                    <td><a href="index.php?area=backend&controller=Order&action=orderDetail&id=<?php echo $rows->order_id; ?>" style="font-size: 15px; color:#B66DFF;" class="mdi mdi-truck-delivery"> Chi tiết</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:10px 0px;float: right;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a href="#" class="page-link">Trang</a>
                </li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item">
                    <a href="index.php?area=backend&controller=Order&action=order&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>