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
        <div class="card-body ">
            <h4 class="card-title">Sửa danh mục sản phẩm</h4>
            <!-- muon upload file thi phai them thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="padding-top: 15px;">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>

            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="padding-top: 15px;">Upload image</div>
                <div class="col-md-10 ">
                    
                    <input class="btn btn-gradient-primary" type="file" name="img" class="file-upload-default">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>

        </div>
    </div>
</div>
