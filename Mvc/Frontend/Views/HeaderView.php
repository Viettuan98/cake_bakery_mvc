    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5db04f65df22d91339a0a1c8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php if(isset($_SESSION["cart"]) == false)
$_SESSION["cart"] = array(); ?>
<header class="main_header_area">
            <div class="top_header_area row m0">
                <div class="container">
                    <div class="float-left">
                        <a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (84) 336341333</a>
                        <a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> Buenotuan98@gmail.com</a>
                    </div>
                    <div class="float-right">
                        <ul class="h_social list_style">
                            <li><a href="https://www.facebook.com/buenotuan"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <ul class="h_search list_style">
                            <!-- <li class="shop_cart"><a href="index.php?controller=Cart"><i class="lnr lnr-cart"></i></a></li>
                            <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li> -->
                            <li><a href="index.php?area=Backend&controller=Login">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.php">
                        <img src="Assets/Frontend/img/logo.png" alt="">
                        <img src="Assets/Frontend/img/logo-2.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="my_toggle_menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li><a href="Home">Trang chủ</a></li>
                                <li><a href="Product">Cửa hàng</a></li> 
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($data as $rows): ?>
                                             <li><a href="Product/Category/<?php echo $rows->id_type; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="navbar-nav justify-content-end">
                               <li class="dropdown submenu">
                                    <a class="dropdown-toggle"  href="Cart" role="button" aria-haspopup="true" aria-expanded="false" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge"><?php echo count($_SESSION['cart']); ?></span></a>
                                    <ul class="dropdown-menu" style="left:-70px;">
                                        
                                        <div class="shopping-cart" >
                                            <div class="shopping-cart-header">
                                              <!-- <i class="fa fa-shopping-cart cart-icon"></i><span class="badge"><?php echo count($_SESSION['cart']); ?></span>
                                              <div class="shopping-cart-total" >
                                                <span class="lighter-text">Total:</span>
                                                <span class="main-color-text">$2,229.97</span> 
                                              </div> -->
                                            </div> <!--end shopping-cart-header -->
                                        
                                        <ul class="shopping-cart-items">
                                            <?php 
                                            foreach($_SESSION["cart"] as $product): ?>
                                          <li class="clearfix">
                                            <img  src="Assets/Upload/Products/<?php echo $product["img"]; ?>" alt="load" />
                                            <span class="item-name"><?php echo $product["name"]; ?></span>
                                            <span class="item-price">
                                                <?php if($product["price"] == 0) {echo number_format($product["newprice"]);} 
                                                else {echo number_format($product["price"]);}?>&nbsp;Vnđ
                                            </span>
                                            <!-- <span class="item-quantity">Quantity: 01</span> -->
                                          </li>
                                            <?php endforeach; ?>
                                        </ul>
                                            <form>
                                                <input class="btn button" onclick="window.location.href='Cart'" type="button" value="Chi tiết giỏ hàng" />
                                            </form>
                                        </div>
                                        
                                    </ul>
                                </li>
                                <li class="h_search list_style"><a class="popup-with-zoom-anim" href="#test-search"><i style="font-size: 22px;" class="fa fa-search"></i></a></li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
 