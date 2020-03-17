<?php 
	//load file layout.php vao view nay
$this->layout = "Mvc/Backend/Views/Layout.php";
?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Trang Chủ <i class="mdi mdi-shuffle-disabled"></i>Quản Lý User</h3>
</div>
<div class="col-md-12 grid-margin stretch-card">  
    <?php if(isset($_GET["email"])): ?>
        <div class="alert alert-danger">Email đã tồn tại!</div>
    <?php endif; ?>
    
    <div class="card ">
        
        <div class="card-body">
            <h4 class="card-title">Edit User</h4>
            <form method="post" action="<?php echo $formAction; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:10px;">
                    <div class="col-md-2" style="padding-top: 10px;">Name</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record)?$record->fullname:''; ?>" name="fullname" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2" style="padding-top: 10px;">Email</div>
                    <div class="col-md-10">
                        <input type="email" <?php if(isset($record->email)): ?> disabled <?php endif; ?> value="<?php echo isset($record)?$record->email:''; ?>" name="email" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2" style="padding-top: 10px;">Password</div>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
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