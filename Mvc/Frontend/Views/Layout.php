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
        <!--================Main Content =================-->

         <?php  echo $this->view;?>
         
        <!--================End Main Content =================-->
        
       
        
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
        <script src="Assets/Frontend/vendors/datetime-picker/js/moment.min.js"></script>
        <script src="Assets/Frontend/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="Assets/Frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="Assets/Frontend/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="Assets/Frontend/vendors/lightbox/simpleLightbox.min.js"></script>
         <script src="Assets/Frontend/js/main.js"></script>
        <script src="Assets/Frontend/js/theme.js"></script>
    </body>

</html>