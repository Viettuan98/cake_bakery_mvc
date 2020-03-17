<?php 
    //ket thua layout1.php de load vao day
    $this->layout = "Mvc/Backend/Views/Layout.php";
 ?>   
 <div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Trang Chủ <i class="mdi mdi-shuffle-disabled"></i>Chi tiết đơn hàng</h3>

    </div>                   
<div class="col-md-12">
    
    <div class="card">
        <div class="card-body">
            <div class="row">

            <h4 class="col-sm-8 card-title">Chi tiết đơn hàng</h4>
            <div class="col-sm-4" style="margin-bottom:20px; float: right;">
               <a href="index.php?area=backend&controller=Order&action=sent&id=<?php echo $id; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
            </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                </tr>
                </thead>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="width: 100px;"><img style="width:80px;height:80px;border-radius: 20%;" src="Assets/Upload/Products/<?php echo $rows->image; ?>" style="width:100px;"></td>
                    <td><?php echo $rows->name; ?></td>
                    <th><?php echo number_format($rows->price); ?></th>
                    <th><?php echo $rows->number; ?></th>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>