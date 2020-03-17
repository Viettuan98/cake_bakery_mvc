<!DOCTYPE html>
<html lang="en">
    
<head>  <base href="http://localhost/dev/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{{asset('')}}">
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
        <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/my_style.css">
        <link href="Assets/Frontend/css/responsive.css" rel="stylesheet">

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
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3><?php echo $record->name; ?></h3>
        			<!-- <ul>
        				<li><a href="index.php">Trang chủ</a></li>
        				
        				<li style="color: white;"><a ></a><?php echo $record->name; ?></a></li>
        			</ul> -->
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area p_100">
        	<div class="container">
        		<div class="row product_d_price">
        			<div class="col-lg-6">
        				<div class="product_img"><img class="img-fluid" style="width: 525px; height: auto;object-fit: cover;" src="Assets/Upload/Products/<?php echo $record->image; ?>" alt=""></div>
        			</div>
        			<div class="col-lg-6">
                        <form method="post" action="index.php?controller=Cart">
        				<div class="product_details_text">
        					<h4><?php echo $record->name; ?></h4>
                            
        					<p><?php echo isset($record->content)? $record->content :''  ?></p>
        					<h5>Giá: <?php if ($record->promotion_price==0): ?>
									<span><?php echo number_format($record->unit_price); ?></span><span>Vnđ</span>
								<?php else: ?>
									<del><?php echo number_format($record->unit_price); ?></del>&nbsp;&nbsp;
									<span><?php echo number_format($record->promotion_price); ?></span>&nbsp;<span>Vnđ</span>
								<?php endif ?></h5>
        					<!-- <div class="quantity_box">
        						<label for="quantity">Số lượng :</label>
        						<input type="number" placeholder="1" min="1" max="100" id="quantity">
        					</div> -->
                            <div class="quantity" style="margin-bottom: 40px;">
                                <p>Số lượng:</p>
                                <div class="pro-qty" style="border: 1px solid #ddd;"><input name="qty" type="text" value="1"></div>
                                <div style="clear: both;"></div>
                            </div>
        					<button class="pink_more" onclick="window.location.href='index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>'" href="">Add to Cart</button>
        				</div>
                        </form>
        			</div>
        		</div>
        		<div class="product_tab_area">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả chung</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đánh giá (0)</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Danh mục</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<p><?php echo isset($record->description)? $record->description :''  ?></p>
							
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Product Details Area =================-->
        
       <!--================Cake Feature Four Area =================-->
       <section class="welcome_bakery_area">
  <div class="container">
    <div class="welcome_bakery_inner p_100">
      <div class="row">
        <div class="col-lg-6">
          <div class="main_title">
            <h2>Chào mừng bạn đến với tiệm bánh của chúng tôi</h2>
            <p>Được nhiều người biết đến với các sản phẩm bánh kem tinh tế và ngon miệng. Với từng sản phẩm bánh kem được trang trí đầy ngọt ngào, tinh tế với nhiều mẫu bánh kem đẹp, mức giá phải chăng tùy theo kích thước và yêu cầu của khách hàng</p>
          </div>
          <div class="welcome_left_text">
            <p>Đến với tiệm bánh bạn có thể được tận hưởng dịch vụ chăm sóc khách hàng của chúng tôi một cách toàn diện nhất. Chúng tôi sẽ nhận làm và giao bánh đến tận nhà theo khung giờ yêu cầu của bạn, nhận tổ chức và set up tiệc sinh nhật, cung cấp dịch vụ quà tặng và các phụ kiện cần thiết đảm bảo bạn có một bữa tiệc hoành tráng cực kỳ ấn tượng.</p>
            <a class="pink_btn" href="#">Biết thêm về chúng tôi</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="welcome_img">
            <img class="img-fluid" src="Assets/Frontend/img/cake-feature/welcome-right.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <style type="text/css">
      
    </style>
    <div class="cake_feature_inner">
      <div class="main_title">
        <h2>Sản phẩm khác !!!</h2>
        <h5> Những chiếc bánh được thay đổi và cập nhật liên tục !</h5>
      </div>
      <div class="cake_feature_slider owl-carousel">
        <?php  $id_other= isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        $data= $this->modelOtherProduct($id_other);
            // $category=$this->modelCategory($id);
         foreach ($data as $rows): ?>  
        <div class="item">
          <div class="cake_feature_item">

            <a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?> ">
              <div class="cake_img">
                <img  height="230px;" style="object-fit: cover;" src="Assets/Upload/Products/<?php echo $rows->image; ?>" alt=""> 
              </div>
            </a>
            <?php if ($rows->promotion_price != 0): ?>
              <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
            <?php endif ?>
            <div class="cake_text">
              <h4 class="animated flash" style="font-size:22px;width: 250px; height: 70px; border-radius:40%;" >
                <?php if ($rows->promotion_price==0): ?>
                  <span><?php echo $unit_price =number_format($rows->unit_price); ?></span><span>Vnđ</span>
                <?php else: ?>
                  <del><?php echo $promotion_price=number_format($rows->promotion_price); ?></del>
                  <span><?php echo $unit_price=number_format($rows->unit_price); ?></span><span>Vnđ</span>
                <?php endif ?>
              
                </h4> 
              <h3 style=""><?php echo $rows->name; ?></h3>
              <a class="pest_btn" href="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>">Thêm Vào Giỏ</a>
            </div>
          </div>    
        </div>
        <?php endforeach; ?>  
      </div>
    </div>
  </div>
</section>
        <!--================End Cake Feature Four Area =================-->
        
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
        <script src="Assets/Frontend/js/main.js"></script>
        <script src="Assets/Frontend/js/theme.js"></script>
    </body>

</html>