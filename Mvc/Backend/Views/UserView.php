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
    <div class="card">
        <div class="card-body"><div class="row">
            <h4 class="col-sm-8 card-title">Danh Sách User</h4>
            <div class="col-sm-4" style="margin-bottom:20px; float: right;">
                <a href="index.php?area=Backend&controller=User&action=add" class="btn btn-primary">Thêm Tài Khoản</a>
            </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th style="width:40%;">Fullname</th>
                        <th style="width:30%;">Email</th>
                        <th style="width:10%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $rows): ?>
                    <tr>
                        <td><?php echo $rows->fullname; ?></td>
                        <td><?php echo $rows->email; ?></td>
                        <td> 

                            <a href="index.php?area=Backend&controller=User&action=edit&id=<?php echo $rows->id; ?>" class="mdi mdi-table-edit " style="font-size: 14px; color:#B66DFF;">Edit</a>&nbsp;&nbsp;
                            <a href="index.php?area=Backend&controller=User&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="mdi mdi-delete-variant " style="font-size: 14px; color:#B66DFF;">Delete</a>
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
                <li class="page-item"><a href="index.php?area=Backend&controller=User&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>