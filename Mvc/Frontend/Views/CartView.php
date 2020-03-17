<!DOCTYPE html>
<html lang="en">

<head>
        <base href="http://localhost/dev/">
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
            <h3>Giỏ Hàng</h3>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php?controller=Cart">Giỏ hàng</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!--================End Main Header Area =================-->

      <!--================Cart Table Area =================-->
      <section class="cart_table_area p_100">
        <div class="container">

            <div class="table-responsive">
              <form action="index.php?controller=Cart&action=update" method="post">
              <table class="table">
                <thead>
                  <?php if($this->cartTotal() > 0): ?>
                  <tr>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá Tiền</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành Tiền</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
              <?php endif ?>
                <tbody>
                  <?php foreach($_SESSION["cart"] as $product): ?>
                    <tr>
                      <td>
                        <img style="width:100px;height:100px;border-radius: 20%;" src="Assets/Upload/Products/<?php echo $product["img"]; ?>" alt="">
                      </td>
                      <td><a style="color:#F195B2" href="Product/Detail/<?php echo $product["id"]; ?>/<?php echo $this->removeUnicode($product["name"]); ?>"><?php echo $product["name"]; ?></a></td>
                      <td><?php  if ($product["price"] == 0) {
                       echo number_format($product["newprice"]);
                      } else {
                       echo number_format($product["price"]);
                      }?></td>
                      <td>  
                            <div class="quantity">
                                
                                <div class="pro-qty" style="border: 1px solid #ddd;"><input type="text" name="product_<?php echo $product["id"]; ?>" value="<?php echo $product["number"]; ?>" min="1"></div>
                                <div style="clear: both;"></div>
                            </div>
                      
                    </td> 
                    <td><b><?php  if ($product["price"] == 0) {
                      echo number_format($product["number"]*$product["newprice"]);
                      } else {
                       echo number_format($product["number"]*$product["price"]);
                      }
                        ?><?php  ?>&nbsp;Vnđ</b> </td>
                    <td><a href="index.php?controller=Cart&action=delete&id=<?php echo $product["id"]; ?>" class="fa fa-trash-o hoverfa" style="font-size: 24px; " aria-hidden="true"></a></td>
                  </tr>
                <?php endforeach; ?> 
                <?php if($this->cartTotal() > 0): ?>
                <tr>
                  <td>
                  <!-- <form class="form-inline"> 
                    <div class="form-group"> 
                      <input type="text" class="form-control" placeholder="Coupon code">
                    </div>
                    <button type="submit" class="btn" s>Apply Coupon</button>
                  </form> -->
                </td>
                <td></td>
                
                 <td></td>
                <td><input type="submit"style="cursor: pointer;" class="pest_btn" value="Cập nhật"></td>
                <td>
                  <a class="pest_btn"  href="Product">TIẾP TỤC MUA HÀNG</a>
                </td>
                <td style="padding: 0px;"><a class="pest_btn" href="index.php?controller=Cart&action=destroy">XÓA TẤT CẢ</a></td>
                 
              </tr>
              <?php else: ?>
                <h3>Giỏ hàng trống, tiếp tục mua hàng <a style="color: #F195B2" href="Product">tại đây</a></h3>
              <?php endif; ?>
            </tbody>
          </table>
        </form>  
        </div>
      
      <div class="row cart_total_inner">
        <div class="col-lg-7"></div>
        <div class="col-lg-5">
          <?php if($this->cartTotal() > 0): ?>
          <div class="cart_total_text">
            <div class="cart_head">
              TỔNG TIỀN THANH TOÁN
            </div>
            <div class="sub_total">
              <!-- <h5>Sub Total <span>$25.00</span></h5> -->
            </div>
            <div class="total">
              <h4>Thành tiền: <span><?php echo number_format($this->cartTotal()); ?>&nbsp;Vnđ</span></h4>
            </div>
            <div class="cart_footer">
              <a class="pest_btn" href="Cart/Checkout">Thanh Toán</a>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!--================End Cart Table Area =================-->

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

</html>