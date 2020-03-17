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
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Chekout</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="index.php?controller=Cart&action=checkout">Chekout</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                <!-- <div class="return_option">
                	<h4>Returning customer? <a href="#">Click here to login</a></h4>
                </div> -->
                <div class="row">
                    
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Chi Tiết Thanh Toán</h2>
               	    	</div>
                        
                		<div class="billing_form_area" >
                			 <form class="billing_form row" action="index.php?controller=Cart&action=doCheckout" method="post" id="contactForm" novalidate="novalidate">
								<div class="form-group col-md-12" style="">
								    <label for="first">Họ và Tên*</label>
									<input style="color: black;" type="text" class="form-control" id="first" name="fullname" placeholder="Full Name">
								</div>
				
								
								<div class="form-group col-md-12">
								    <label for="address">Địa chỉ *</label>
									<input style="color: black;" type="text" class="form-control" id="address" name="address" placeholder="Address">
									
								</div>
								
								
								
								<div class="form-group col-md-12">
								    <label for="email">Email *</label>
									<input style="color: black;" type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
								<div class="form-group col-md-12">
								    <label for="phone">Số điện thoại *</label>
									<input style="color: black;" type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
								</div>
								<div class="select_check col-md-12">
									<div class="creat_account">
										<input type="checkbox" id="f-option" name="selector">
										<label for="f-option">Create an account?</label>
										<div class="check"></div>
									</div>
								</div>
								
								<div class="form-group col-md-12">
									<label for="phone">Ghi chú</label>
									<textarea style="color: black;" class="form-control" name="message" id="message" rows="1" placeholder="Lưu ý về đơn hàng của bạn. Ví dụ: lưu ý đặc biệt để giao hàng"></textarea>
								</div>
                                <button type="submit" style="margin: 0px;text-align: center;" class="btn pest_btn">Đặt Hàng !!!</button>
						</form>	
                		</div>
                        
                	</div>
                     
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Đơn Hàng Của Bạn</h2>
                			</div>
							<div class="payment_list">
								<div class="price_single_cost">
									<h5>Prodcut <span>Total</span></h5>
									<h5>Electric Hummer x 1 <span>$65.00</span></h5>
									<h4>Subtotal <span>$65.00</span></h4>
									<h5>Shipping And Handling<span class="text_f">Free Shipping</span></h5>
									<h3>Total <span>$65.00</span></h3>
								</div>
								<div id="accordion" class="accordion_area">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">
												<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Thanh toán chuyển khoản:
												</button>
											</h5>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
											<div>Tên tài khoản: NGUYEN VIET TUAN
                                            Số tài khoản: 8310 1068 23004
                                            Ngân hàng MBBank Phòng Giao dịch Sơn Tây</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Check Payment
												</button>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
											Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Paypal
												<img src="Assets/Frontend/img/checkout-card.png" alt="">
												</button>
												<a href="#">What is PayPal?</a>
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
											Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn pest_btn">Đặt Hàng !!!</button>
							</div>
						</div>
                	</div>
                   
                </div>
            </div>
        </section>
        <!--================End Billing Details Area =================-->   

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