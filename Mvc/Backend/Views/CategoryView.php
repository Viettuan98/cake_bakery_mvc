<?php 
	//load file layout.php vao view nay
$this->layout = "Mvc/Backend/Views/Layout.php";
?>

<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2">
			<i class="mdi mdi-home"></i>
		</span> Trang Chủ <i class="mdi mdi-shuffle-disabled"></i>Danh Mục Sản Phẩm</h3>
</div>
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<div class="row">
			<h4 class="col-sm-8 card-title">Danh mục sản phẩm</h4>
			<div class="sol-sm-4" style="margin-bottom:20px; float: right;">
				<a href="index.php?area=Backend&controller=Category&action=add" class="btn btn-primary">Thêm Danh Mục</a>
			</div>
			</div>
			<table class="table table-bordered table-hover">
				<thead class="thead-light">
					<tr>
						<th style="width: 30%;">Name</th>
						<th style="width:60%;">Image</th>
						<th style="width:10%;"></th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $rows): ?>
						<tr>
							<td><?php echo $rows->name ?></td>
							<td height="150px;">
								<?php if($rows->image != "" && file_exists("Assets/Upload/Category/".$rows->image)): ?>
									<img src="Assets/Upload/Category/<?php echo $rows->image; ?>" style="width:100px;height:100px;border-radius: 20%;">
								<?php endif; ?>
							</td>
							
							<td> 
								<a href="index.php?area=Backend&controller=Category&action=edit&id=<?php echo $rows->id_type; ?>" class="mdi mdi-table-edit " style="font-size: 14px; color:#B66DFF;">Edit</a>&nbsp;&nbsp;
								<a href="index.php?area=Backend&controller=Category&action=delete&id=<?php echo $rows->id_type; ?>" onclick="return window.confirm('Are you sure?');" class="mdi mdi-delete-variant " style="font-size: 14px; color:#B66DFF;">Delete</a>
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
					<li class="page-item"><a href="index.php?area=Backend&controller=Category&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
