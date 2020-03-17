<?php 
    //load template
$this->layout = "Mvc/Backend/Views/Layout.php";
?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2">
			<i class="mdi mdi-home"></i>
		</span> Trang Chủ <i class="mdi mdi-shuffle-disabled"></i>Quản Lý Tin Tức</h3>

	</div>
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Danh sách sản phẩm</h4>

				<table class="table table-bordered table-hover">
					<thead class="thead-light">
						<tr>
							<th style="width:100px;">Tiêu Đề</th>
							<th style="width:100px;">Mô Tả</th>
							<th style="width:100px;">Nội Dung</th>
							<th style="width:100px;">Ảnh</th>
							<th style="width:100px;"></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $rows): ?>
							<tr>
								<td><div style="overflow: hidden;width:100px;"><?php echo $rows->title ?></div></td>
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
						<li class="page-item"><a href="index.php?area=Backend&controller=News&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

