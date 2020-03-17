<!DOCTYPE html>
<html lang="en">
    
<head>  <base href="http://localhost/dev/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="Assets/Frontend/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="Assets/Frontend/css/font-awesome.min.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/linearicons/style.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/flat-icon/flaticon.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="Assets/Frontend/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="Assets/Frontend/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="Assets/Frontend/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="Assets/Frontend/vendors/nice-select/css/nice-select.css" rel="stylesheet">
        
        <link href="Assets/Frontend/css/style.css" rel="stylesheet">
        <link href="Assets/Frontend/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/my_style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Main Header Area =================-->
         <?php include "Mvc/Frontend/Views/HeaderView.php";
         include "Mvc/Frontend/Controllers/CategoryController.php";
              $obj = new CategoryController();
              $obj->index();
         ?>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area main_slider_area">
            <div class="container main_slider">
                <div class="banner_text">
                    <h3>
                    </h3>
                    <ul>
                        <!-- <li><a href="index.html"></a></li>
                        <li><a href="shop.html"></a></li> -->
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
            <div class="container">
                <div class="row product_inner_row">
                    <div class="col-lg-9">
                        <div class="row m0 product_task_bar"> 
                            <div class="product_task_inner"> 
                                <div class="float-left">
                                   <!--  <a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                    <span></span> -->
                                </div>
                                <div class="float-right">
                                    <h4>Sắp xếp theo :</h4>
                                    <select class="short">
                                        <option data-display="Sản phẩm mới nhất">Sản phẩm mới nhất</option>
                                        <option value="1">Giá tăng dần</option>
                                        <option value="2">Giá giảm dần</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                            <!-- main -->
                            <?php echo $this->view; ?>
                            <!-- end main --> 
  
                    </div>
                    <div class="col-lg-3">
                        <div class="product_left_sidebar">
                            <aside class="left_sidebar search_widget">
                                <div class="input-group">
                                    <input type="text" id="key" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><i class="icon icon-Search" onclick="return search();"></i></button>
                                    </div>
                                </div>
                            </aside>
                            <aside class="left_sidebar p_catgories_widget">
                                <div class="p_w_title">
                                    <h3>Danh Mục Sản Phẩm</h3>
                                </div>
                                <ul class="list_style">
                                    <?php 
                                            $conn = Connection::getInstance();
                                            $query = $conn->query("select * from type_products order by id_type desc");
                                            $categoryproduct = $query->fetchAll();
                                            foreach ($categoryproduct as $rows): ?>
                                        <li><a href="Product/Category/<?php echo $rows->id_type; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></li>
                                    <?php endforeach ?>                                 
                                </ul>
                            </aside>
                            <script type="text/javascript">
                            	 function filter(){	 
                						min = document.getElementById("amountmin").value;
                						max = document.getElementById("amountmax").value;
                						location.href="index.php?controller=Filter&min="+min+"&max="+max;
                						return false;
              						}
                            </script>
                            <aside class="left_sidebar p_price_widget">
                                <div class="p_w_title">
                                    <h3>Lọc theo giá : </h3>
                                </div>
                                <div class="filter_price">
                                    <div id="slider-range"></div>
                                    <label for="amountmin">Giá: </label>
                                    <input type="number" id="amountmin" name="amountmin" readonly style="width:55px;" /> <span class="icon icon-Goto"></span>
                                    <input type="number" id="amountmax" name="amountmax" readonly style="width:63px;"/> <span style="font-size: 14px;">Vnđ</span>
                                   <button class="btn filter" style="float: right;height: 30px;" onclick="return filter();" type="submit"><i  class="icon icon-Search" ></i></button>
                                </div>
                            </aside>
                            <aside class="left_sidebar p_sale_widget">
                                <div class="p_w_title">
                                    <h3>Sản Phẩm Bán Chạy</h3>
                                </div>
                                <?php $conn = Connection::getInstance();
                                 $query = $conn->query("select product_id,products.name,unit_price,promotion_price,image,SUM(number) AS TONG FROM products,tbl_order_detail WHERE products.id = tbl_order_detail.product_id GROUP BY name ORDER BY SUM(number) DESC LIMIT 0,4");
                                 $selling= $query->fetchAll();
                                 foreach ($selling as $rows): ?>
                                <div class="media">
                                    <div class="d-flex">
                                        <a href="Product/Detail/<?php echo $rows->product_id; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><img style="height: 95px;width:104px;border-radius:10px;" src="Assets/Upload/Products/<?php echo $rows->image; ?>" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <a href="Product/Detail/<?php echo $rows->product_id; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><h4 style="font-size:18px;height: 50px;"><?php echo $rows->name ?></h4></a>
                                       <!--  <ul class="list_style">
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul> -->
                                        <h5><?php if ($rows->promotion_price==0): ?>
                                            <span><?php echo number_format($rows->unit_price); ?></span><span>Vnđ</span>
                                            <?php else: ?>
                                            <!-- <del><?php echo number_format($rows->unit_price); ?></del> -->
                                            <span><?php echo number_format($rows->promotion_price); ?></span><span>Vnđ</span>
                                            <?php endif ?></h5>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Area =================-->
        
        <!--================Footer Area =================-->
        <?php include "Mvc/Frontend/Views/FooterView.php"; ?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="Assets/Frontend/js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="Assets/Frontend/js/popper.min.js"></script>
        <script src="Assets/Frontend/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="Assets/Frontend/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="Assets/Frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="Assets/Frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="Assets/Frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="Assets/Frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="Assets/Frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="Assets/Frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="Assets/Frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="Assets/Frontend/vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="Assets/Frontend/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="Assets/Frontend/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="Assets/Frontend/vendors/datetime-picker/js/moment.min.js"></script>
        <script src="Assets/Frontend/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="Assets/Frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="Assets/Frontend/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="Assets/Frontend/vendors/lightbox/simpleLightbox.min.js"></script>
       
        <script src="Assets/Frontend/js/theme.js"></script>
    </body>

</html>