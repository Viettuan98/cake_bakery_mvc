<?php 
	//load file layout.php vao view nay
$this->layout = "Mvc/Backend/Views/Layout.php";
?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2">
			<i class="mdi mdi-home"></i>
		</span> Trang Chủ <i class="mdi mdi-shuffle-disabled"></i>Danh Sách Sản Phẩm</h3>
		</div>
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Danh sách sản phẩm</h4>
					
					<table class="table table-bordered table-hover">
						<thead class="thead-light">
							<tr>
								<th style="width:20%;">Tên Sản Phẩm</th>
								<th style="width:10%;">Danh Mục</th>
								<th style="width:30%;">Ảnh</th>
								<th style="width:15%;">Giá Bán</th>
								<th style="width:15%;">Giá Khuyến Mãi</th>
								<th style="width:50px;">New


								</th>
								<!-- <th style="width:5%;">Đơn Vị</th> -->
								<th style="width:10%;"></th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $rows): ?>
								<tr>
									<td><?php echo $rows->name ?></td>
									<td>
										<?php 
										$type_product = $this->modelGetProduct($rows->id_type);
										echo isset($type_product->name)?$type_product->name:"";
										?>
										
									</td>
									<td>
										<?php if($rows->image != "" && file_exists("Assets/Upload/Products/".$rows->image)): ?>
											<img src="Assets/Upload/Products/<?php echo $rows->image; ?>" style="width:70px;height:70px;border-radius: 20%;">
										<?php endif; ?>
									</td>
									<td><?php echo $formatunit_price= number_format($rows->unit_price); ?>&nbsp;Vnđ</td>
									
									<td><?php echo $formatpromotion_price= number_format($rows->promotion_price); ?>&nbsp;Vnđ</td>
									<td style="text-align: center;">
										
										<?php if($rows->new == 1): ?>
											<span class="mdi mdi-check-decagram" style="font-size: 18px; color:#B66DFF;"></span>
										<?php endif; ?>									
									</td>
									<!-- <td><?php  $rows->unit ?></td> -->

									<td> 
										<a href="index.php?area=Backend&controller=Products&action=edit&id=<?php echo $rows->id; ?>" class="mdi mdi-table-edit " style="font-size: 14px; color:#B66DFF;">Edit</a>&nbsp;&nbsp;
										<a href="index.php?area=Backend&controller=Products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="mdi mdi-delete-variant " style="font-size: 14px; color:#B66DFF;">Delete</a>
									</td>
								</tr>    
							<?php endforeach ?>
						</tbody>
					</table>

					<style type="text/css">
						.pagination{padding:0px; margin:10px 0px;float: right;}
					</style>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
						<?php for($i = 1; $i <= $numPage; $i++): ?>
							<li class="page-item"><a href="index.php?area=Backend&controller=Products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>
