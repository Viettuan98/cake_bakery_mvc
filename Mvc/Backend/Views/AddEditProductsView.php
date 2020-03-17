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
	<div class="card ">
        <div class="card-body">
        	<form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" >Tên Sản Phẩm</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Danh Mục</div>
                <div class="col-md-10">
                    <select name="category_id" class="form-control" style="width: 300px;">
                    	<?php 
                    	//lay bien ket noi
                    	$conn = Connection::getInstance();
                    	//thuc thi truy van
                    	$query = $conn->query("select * from type_products order by id_type desc");
                    	//lay toan bo ket qua tra ve
                    	$category = $query->fetchAll();
                    	foreach($category as $rows):?>                        
                        <option <?php if(isset($record->id_type)&&$record->id_type==$rows->id_type): ?> selected <?php endif; ?> value="<?php echo $rows->id_type; ?>"><?php echo $rows->name; ?></option>
                       <?php endforeach; ?>
                	</select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Mô Tả</div>
                <div class="col-md-10">
                    <textarea name="description" id="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                    <script type="text/javascript">
                    	CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá bán</div>
                <div class="col-md-6 form-group">  
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-gradient-primary text-white">$</span>
                        </div>
                        <input type="text" name="unit_price" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo isset($record->unit_price)?$record->unit_price:""; ?>">
                        <div class="input-group-append">
                          <span class="input-group-text bg-gradient-primary text-white">.Vnđ</span>
                        </div>
                      </div>
                
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá Khuyến Mại</div>
                <div class="col-md-6 form-group">  
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-gradient-primary text-white">$</span>
                        </div>
                        <input type="text" name="promotion_price" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo isset($record->promotion_price)?$record->promotion_price:""; ?>">
                        <div class="input-group-append">
                          <span class="input-group-text bg-gradient-primary text-white">.Vnđ</span>
                        </div>
                      </div>
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
            
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Đơn vị</div>
                <div class="col-md-10">
                <select name="unit" class="form-control" style="width: 300px;">
                    <?php 
                        //lay bien ket noi
                        $conn = Connection::getInstance();
                        //thuc thi truy van
                        $query = $conn->query("select * from products order by id desc");
                        //lay toan bo ket qua tra ve
                        $unit = $query->fetchAll();
                        foreach($unit as $rows):?>                        
                        <option <?php if(isset($record->id)&&$record->id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->unit; ?></option>
                       <?php endforeach; ?>
                       
                    
                </select>
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10" style="font-size: 20px;">
                    <input type="checkbox" <?php if(isset($record->new)&&$record->new==1): ?> checked <?php endif; ?>  name="new" id="new"> <label for="new">Sản phẩm nổi bật</label>
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