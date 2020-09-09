<?php
//////////////////////////////////////////head//////////////////////////////////////////////////
function head(){
session_start();
?>
<!doctype html>
<html class="no-js" lang="ar">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Royal Rose</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

</head>
<?php 
}
//////////////////////////////////////////head_c//////////////////////////////////////////////////
function head_c(){
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Royal Rose</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">    
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<?php 
}
////////////////////////////////////////////navigation///////////////////////////////////////////
function navigation(){
?>
<body>
<div class="wrapper">
<!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
    <div class="container">
    <div class="row">
    <div class="menumenu__container clearfix">
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
    <div class="logo">
    <!-- logo is here -->
    <a href="index.php"><img src="images/logo/royal_b.PNG" alt="logo images" ></a>
    </div>
    </div>
    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
    <nav class="main__menu__nav hidden-xs hidden-sm">
        <ul class="main__menu">
        <li class="drop"><a href="index.php">Home</a></li>
        <li class="drop"><a href="perfume.php">Perfume</a>
        <!-- mega menu -->

        <ul class="dropdown mega_dropdown">
            <!-- Start Single Mega MEnu -->
        <?php
        include 'connection.php';
        $q = "SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id` = 1";
        $res = mysqli_query($conn , $q);
        while ($row = mysqli_fetch_assoc($res)){
            echo '<li>';
            echo '<a class="mega__title" href="#">'.$row['sub_cat_title_ar'].'</a>';
            echo '<ul class="mega__item">';
            $a = $row['sub_cat_title'];
            $qq = "SELECT * FROM `product` WHERE `pro_sub_title` = '{$a}' LIMIt 0,5";
            $ress = mysqli_query($conn , $qq);
            while($roww = mysqli_fetch_assoc($ress)){
                echo '<li><a href="products.php?id='.$roww['product_id'].'">'.$roww['product_title_ar'].'</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        }
        ?>
        <!-- End Single Mega MEnu -->
        </ul>
        <!-- end mega menu -->
        </li>
        <li class="drop"><a href="soap.php">Soap</a>
        <ul class="dropdown mega_dropdown">
        <?php
        include 'connection.php';
        $q = "SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id` = 2";
        $res = mysqli_query($conn , $q);
        while ($row = mysqli_fetch_assoc($res)){
            echo '<li>';
            echo '<a class="mega__title" href="#">'.$row['sub_cat_title_ar'].'</a>';
            echo '<ul class="mega__item">';
            $a = $row['sub_cat_title'];
            $qq = "SELECT * FROM `product` WHERE `pro_sub_title` = '{$a}' LIMIt 0,5";
            $ress = mysqli_query($conn , $qq);
            while($roww = mysqli_fetch_assoc($ress)){
                echo '<li><a href="products.php?id='.$roww['product_id'].'">'.$roww['product_title_ar'].'</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        }
        ?>
        <!-- End Single Mega MEnu -->
        </ul>
        </li>
        <li class="drop"><a href="gallery.php">Gallery</a></li>
        <li class="drop"><a href="about.php">About Us</a></li>
        <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>
    <!-- mobile menu -->
    <div class="mobile-menu clearfix visible-xs visible-sm">
    <nav id="mobile_dropdown" class="mob">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="perfume.php">Perfume</a>
        <ul>
        <?php
        include 'connection.php';
        $q="SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id`= 1";
        $res=mysqli_query($conn , $q);
        while($row=mysqli_fetch_assoc($res)){
            echo '<li><a href="perfume.php">'.$row['sub_cat_title'].'</a></li>';
        }
        ?>
        </ul>
        </li>
        <li><a href="soap.php">Soap</a>
        <ul>
        <?php
        include 'connection.php';
        $q="SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id`= 2";
        $res=mysqli_query($conn , $q);
        while($row=mysqli_fetch_assoc($res)){
            echo '<li><a href="soap.php">'.$row['sub_cat_title'].'</a></li>';
        }
        ?>
        </ul>
        </li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    </div>
    <!-- end mobile menu -->
    </div>

    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
    <div class="header__right">

    <!-- <div class="header__search"> -->
    <div style='margin-right:15px ; padding:10px'>
    <div class="dropdown" >
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="images/icons/globe.png" style="height: 17px ;width: 17px; margin-bottom: 3px; margin-left:15px"/>                        
    </a>
    <ul class="dropdown-menu">
    <li style='width:auto'><a href="../en/" style='text-align:center'>الإنجيليزية</a></li>
    <li style='width:auto'><a href="#"  style='text-align:center'>العربية</a></li>
    </ul>
    </div>
    </div>

    <!-- <div class="header__account"> -->
    <div style="margin-right:15px ; ">
    <div class="dropdown show">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-user icons" style="color:black ; margin-left:-5px"></i>
    </a>
    <ul class="dropdown-menu" >
    <?php
    if(isset($_SESSION['customer_logged'])){
        echo "<li><a href='account.php' style='text-align:center'>حسابي</a></li>";
        echo "<li><a href='logout.php' style='text-align:center'>تسجيل الخروج</a></li>";
    }else{
        echo '<li><a data-toggle="modal" data-target="#login" style="text-align:center">تسجيل الدخول</a></li>';
        echo "<li><a href='signup.php' style='text-align:center'>إنشاء حساب</a></li>";
    }
    ?>
    </ul>
    </div>
    </div>

    <div class="htc__shopping__cart" >
    <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
    <?php
    if(!isset($_SESSION['customer_logged'])){
        echo '<a href="#"><span class="htc__qua">0</span></a>';
    }else{
        echo '<a href="#"><span class="htc__qua" id="cart_number"></span></a>';
    }
    ?>
<script>
        onload(fill_cart_number());
        function fill_cart_number(){
        var cart_number = document.getElementById('cart_number');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_cart_number.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                cart_number.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
</script>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="mobile-menu-area"></div>
    </div>
    </div>
    <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Area -->
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
    <!-- Start Cart Panel -->
    <div class="shopping__cart">
    <div class="shopping__cart__inner">
    <div class="offsetmenu__close__btn">
    <a href="#"><i class="zmdi zmdi-close"></i></a>
    </div>
    <div class="shp__cart__wrap" id='cart_wrap'>
    
    <script>
    onload(fill_cart());
    function fill_cart(){
        var cart_wrap = document.getElementById('cart_wrap');
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", 'fill_cart.php' , true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    cart_wrap.innerHTML = this.responseText;
                }
            };
            xhttp.send();
    }
    </script>
    </div>
    <ul class="shoping__total">
    <li class="subtotal"></li>
    <li class="total__price"></li>
    </ul>
    </div>
    </div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                <label>Username</label>
                <input type='text' name='user' placeholder='user'class="form-control" required/>
                <br>
                <label>Password</label>
                <input type='password' name='pass' placeholder='pass' class="form-control" required/>
                <br>
                <div class="modal-footer">
                <input type="submit" name='login' class="btn btn-warning" value='Login'>
                </div>
                <?php
                include 'connection.php';
                if(isset($_POST['login'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $q = "SELECT * FROM `customer` WHERE `customer_username` = '{$user}' AND `customer_password` = '{$pass}'";
                $res = mysqli_query($conn , $q);
                $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                $count = mysqli_num_rows($res);
                if($count == 1){
                    $_SESSION['customer_logged'] = $row['customer_id'];
                    echo "<script>window.location.href='index.php';</script>";
                }
                // header('location:index.php');
                    }
                    ?>
                </form>
            </div>
            </div>
        </div>
</div>
    <!-- End Cart Panel -->
</div>
<!-- End Offset Wrapper -->
<?php
}
/////////////////////////////////////////footer/////////////////////////////////////////////////
function footer(){
?>
<!-- Start Footer Area -->
<footer id="htc__footer" style='direction:rtl'>
    <!-- Start Footer Widget -->
    <div class="footer__container bg__cat--1">
    <div class="container">
    <span >
    <a href="#"><img src="images/logo/royal_w.PNG" alt="logo images" class="logo_d" ></a>
    </span>
    <div class="row">
    <!-- Start Single Footer Widget -->
    <div class="col-md-3 col-sm-6 col-xs-12" style='float:right'>
    <div class="footer">
    <h2 class="title__line--2" style='direction:rtl'>عنا</h2>
    <div class="ft__details" style='direction:rtl'>
    <?php
    include 'connection.php';
    $q="SELECT * FROM `footer`";
    $res=mysqli_query($conn , $q);
    $row = mysqli_fetch_assoc($res);
    echo "<p style='direction:rtl'>".$row['footer_about_ar']."</p>";
    ?>
    <div class="ft__social__link" style='direction:rtl'>
    <ul class="social__link">
    <?php
    include 'connection.php';
    $q = "SELECT * FROM `social`";
    $res = mysqli_query($conn , $q);
    WHILE($row= mysqli_fetch_assoc($res)){
        echo '<li><a href="'.$row['social_link'].'"><i class="icon-social-'.$row['social_title'].' icons"></i></a></li>';
    }
    ?>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <!-- End Single Footer Widget -->
    <!-- Start Single Footer Widget -->
    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40" style='direction:rtl ; float:right'>
    <div class="footer">
    <h2 class="title__line--2" style='direction:rtl'>معلومات</h2>
    <div class="ft__inner">
    <ul class="ft__list">
    <li><a href="about.php" style="direction:rtl">عنا</a></li>
    <li><a href="about.php" style="direction:rtl">معلومات التوصيل</a></li>
    <li><a href="about.php" style="direction:rtl">سياسة خاصة</a></li>
    <li><a href="about.php" style="direction:rtl">الشروط والأحكام</a></li>
    <li><a href="about.php" style="direction:rtl">تصنع</a></li>
    </ul>
    </div>
    </div>
    </div>
    <!-- End Single Footer Widget -->
    <!-- Start Single Footer Widget -->
    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40" style='direction:rtl ; float:right'>
    <div class="footer">
    <h2 class="title__line--2" style='direction:rtl'>الحساب</h2>
    <div class="ft__inner">
    <ul class="ft__list">
    <?php
    if(isset($_SESSION['customer_logged'])){
        echo '<li><a href="account.php" style="direction:rtl">حسابي</a></li>';
        echo '<li><a href="#" style="direction:rtl">تسجيل الدخول</a></li>';
        echo '<li><a class="cart__menu" href="#" style="direction:rtl">قائمة الرغبات</a></li>';
        echo '<li><a class="cart__menu" href="#" style="direction:rtl">الدفع</a></li>';
    }else{
        echo '<li><a data-toggle="modal" data-target="#login" style="direction:rtl">حسابي</a></li>';
        echo '<li><a data-toggle="modal" data-target="#login" style="direction:rtl">تسجيل الدخول</a></li>';
        echo '<li><a data-toggle="modal" data-target="#login" style="direction:rtl">قائمة الرغبات</a></li>';
        echo '<li><a data-toggle="modal" data-target="#login" style="direction:rtl">الدفع</a></li>';
    }
    ?>
    </ul>
    </div>
    </div>
    </div>
    <!-- End Single Footer Widget -->

 <!-- Start Single Footer Widget -->
 <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40" style='direction:rtl ;float:right'>
    <div class="footer">
    <div class="ft__inner">
    <ul class="ft__list">
    <div id="googleMap" style="max-width:475px; width:500px ; direction:rtl"></div>
    </ul>
    </div>
    </div>
    </div>
    <!-- End Single Footer Widget -->

    </div>
    </div>
    </div>
    <!-- End Footer Widget -->
    <!-- Start Copyright Area -->
    <div class="htc__copyright bg__cat--5" style='direction:rtl ;'>
    <div class="container">
    <div class="row">
    <div class="col-xs-12">
    <div class="copyright__inner">
    <p>.Copyright© <a href="#">Royal Rose</a> 2019. All
    right reserved</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!-- End Footer Style -->
</div>
<?php
bot_links();
}
///////////////////////////////////////////footer_contact/////////////////////////////////////////////////
function footer_c(){
?>
<?php
footer();
bot_links();
}
///////////////////////////////////////////slider/////////////////////////////////////////////////
function slider(){
?>
<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
    <?php
    include 'connection.php';
    $q = "SELECT * FROM `slider`";
    $res = mysqli_query($conn , $q);
    while($row = mysqli_fetch_assoc($res)){
        //Start Single Slide
        echo "<div class='single__slide animation__style01 slider__fixed--height'>";
        echo "<div class='container'>";
        echo "<div class='row align-items__center'>";
        echo "<div class='col-md-7 col-sm-7 col-xs-12 col-lg-6'>";
        echo "<div class='slide'>";
        echo "<div class='slider__inner'>";
        echo "<h2>".$row['slider_title_ar']."</h2>";
        echo "<h1>".$row['slider_name_ar']."</h1>";
        echo "<div class='cr__btn'>";
        echo "<a href='#'>Shop Now</a>";
        echo "</div></div></div></div>";
        echo "<div class='col-lg-6 col-sm-5 col-xs-12 col-md-5'>";
        echo "<div class='slide__thumb'>";
        echo "<img src='../cc/slider/".$row['slider_image']."' alt='slider images'>";
        echo "</div></div></div></div></div>";
    }
    ?>
    </div>
</div>
<?php
}
//////////////////////////////////////new_arrivals////////////////////////////////////////////////
function new_arrivals(){
?>
<section class="top__rated__area bg__white pt--100 pb--110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--20">
                    <?php
                    include 'connection.php';
                    $q = "SELECT * FROM `product` Order By `product_id` DESC limit 0,3";
                    $res = mysqli_query($conn , $q);
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                        echo "<div class='htc__best__product'>";
                        echo "<div class='htc__best__pro__thumb'>";
                        echo "<div class='htc__best__product__details'>";
                        echo "<h2 style='direction:rtl'><a href='#'>".$row['product_title_ar']."</a></h2>";
                        if($row['product_rating']==1){
                            echo "<ul class='rating' style='direction:rtl'>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "</ul>";
                        }
                        else if($row['product_rating']==2){
                            echo "<ul class='rating' style='direction:rtl'>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "</ul>";
                        }
                        else if($row['product_rating']==3){
                            echo "<ul class='rating' style='direction:rtl'>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "</ul>";
                        }
                        else if($row['product_rating']==4){
                            echo "<ul class='rating' style='direction:rtl'>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li class='old'><i class='icon-star icons'></i></li>";
                            echo "</ul>";
                        }
                        else if($row['product_rating']==5){
                            echo "<ul class='rating' style='direction:rtl'>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "<li><i class='icon-star icons'></i></li>";
                            echo "</ul>";
                        }
                        echo "<ul class='top__pro__prize' style='direction:rtl'>";
                        echo "<li>".$row['product_price']."$</li></ul>";
                        echo "<div class='best__product__action' style='direction:rtl'>";
                        echo "<ul class='product__action--dft'>";
                        if(!isset($_SESSION['customer_logged'])){
                            echo "<li><a data-toggle='modal' data-target='#login'><i class='icon-handbag icons'></i></a></li></ul>";
                            echo "</div></div></div>";   
                        }else{
                            echo "<li><a href='add_to_wishlist.php?id=".$row['product_id']."'><i class='icon-handbag icons'></i></a></li></ul>";
                            echo "</div></div></div>";
                            }

                        echo "<a href='#'>";
                        echo "<img src='../cc/products/".$row['product_image']."' alt='small product'></a></div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
</section>
<?php
}
//////////////////////////////////////testimonial////////////////////////////////////////////////
function testimonial(){
?>
<section class="htc__testimonial__area bg__cat--4" style="background-color:#111111!important;>
            <div class="container">
                <div class="row">
                    <div class="ht__testimonial__activation clearfix">
                        <?php
                        include 'connection.php';
                        $q = "SELECT * FROM `testimonial`";
                        $res = mysqli_query($conn , $q);
                        while($row = mysqli_fetch_assoc($res)){
                            echo "<div class='col-lg-6 col-md-6 single__tes'>";
                            echo "<div class='testimonial'>";
                            echo "<div class='testimonial__thumb'>";
                            echo "<img src='../cc/testimonials/".$row['testimonial_image']."' alt='testimonial images'></div>";
                            echo "<div class='testimonial__details'>";
                            echo "<h4 style='color:white ; direction:rtl'>".$row['testimonial_name_ar']."</h4>";
                            echo "<p style='color:white ;direction:rtl'>".$row['testimonial_about_ar']."</p></div></div></div>";
                        }

                        ?>
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#"> Mr. Mohamad Ahmad</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through
                                        the pathway of more success. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>
            </div>
</section>
<?php
}
////////////////////////////////////////////blog/////////////////////////////////////////////////
function blog(){
?>
<section class="htc__blog__area bg__white ptb--100" style="direction:rtl">
            <div class="container" style="direction:rtl">
                <div class="row" style="direction:rtl">
                    <div class="col-xs-12" style="direction:rtl">
                        <!-- <div class="section__title--2 text-center">
                            <h2 class="title__line"></h2>
                            <p>But I must explain to you how all this mistaken idea</p>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="ht__blog__wrap clearfix" style="direction:rtl">
                    <?php
                    include 'connection.php';
                    $q = "SELECT * FROM `blog`";
                    $res = mysqli_query($conn , $q);
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<div class='col-md-6 col-lg-4 col-sm-6 col-xs-12'>";
                        echo "<div class='blog'>";
                        echo "<div class='blog__thumb'>";
                        echo "<img src='../cc/blogs/".$row['blog_image']."' alt='blog images'></div>";
                        echo "<div class='blog__details'><div class='bl__date'>";
                        echo "<span>".$row['blog_title_ar']."</span></div>";
                        echo "<h2>".$row['blog_name_ar']."</h2>";
                        echo "<p>".$row['blog_description_ar']."</p></div></div></div>";
                    }
                    ?>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
</section>
<?php
}
//////////////////////////////////////////contact////////////////////////////////////////////////
function contact(){
?>
<section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="map-contacts--2">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12" >
                        <h2 class="title__line--6" style="direction:rtl ; ">اتصل بنا</h2>
                        <div class="address" style = "height:auto ; width:125% ;">
                        <div class="address__details" >
                                <h2 class="ct__title" style="direction:rtl">العنوان</h2>
                                <?php
                                include 'connection.php';
                                $q="SELECT * FROM `contact`";
                                $res = mysqli_query($conn , $q);
                                while($row =mysqli_fetch_assoc($res)){
                                    echo "<p style='direction:rtl'>".$row['contact_address_ar']."</p>";
                                }
                                ?>
                            </div>
                        </div>

                        <div class="address" style='width:125% ; height:auto'>
                        <div class="address__details" >
                                <h2 class="ct__title" style="direction:rtl">الهاتف</h2>
                                <?php
                                include 'connection.php';
                                $q = "SELECT * FROM `phone`";
                                $res = mysqli_query($conn , $q);
                                while($row=mysqli_fetch_assoc($res)){
                                    echo "<p style='direction:rtl'>".$row['phone_number']."+</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>      
                </div>
                <div class="row" style="float:right ; direction:rtl">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6" style="direction:rtl">تواصل معنا</h2>
                            </div>
                        </div>
                                <div class="contact-btn" style="margin-left:15px">
                                    <button type="submit" class="fv-btn"><a href="mailto:info@eroyalrose.com">ارسل لنا رسالة</a></button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
</section>
<?php
}
//////////////////////////////////////////bot_links/////////////////////////////////////////////
function bot_links(){
?>
<!-- jquery latest version -->
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
<!-- Google Map js -->
<script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyDK7-NEUcjjtoHDBx5XOPV9ubXh6ty9Ba8&callback=loadScript">
</script>
<script src="js/contact-map.js"></script>
<script>
// When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);
        function init() {
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                zoom: 12,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                // center: new google.maps.LatLng(33.8938, 35.5018),
                // This is where you would paste any style found on Snazzy Maps.
            };
            var mapElement = document.getElementById('googleMap');
            var map = new google.maps.Map(mapElement, mapOptions);
            var bounds = new google.maps.LatLngBounds();
            <?php
            include 'connection.php';
            $q="SELECT * FROM `location`";
            $res = mysqli_query($conn , $q);
            while($row = mysqli_fetch_assoc($res)){

                echo "var position = new google.maps.LatLng( ".$row['location_lat'].", ".$row['location_lng']." );";
                echo "bounds.extend( position );";
                ?>
                	var marker = new google.maps.Marker({
                        animation:google.maps.Animation.BOUNCE
					, map: map
					, position: position
					, icon: 'images/icons/d.png'
				});
                <?php
            }
            ?>
            map.fitBounds( bounds );
        }
        function loadScript() {
			var script = document.createElement( "script" );
			script.type = "text/javascript";
			script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialise"; // initialize method called using callback parameter
			document.body.appendChild( script );
		}
		onload(loadScript());
</script>
<!-- Waypoints.min.js. -->
<script src="js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
</body>

</html>
<?php
}
/////////////////////////////////////////////////about////////////////////////////////////////////
function about(){
?>
<?php
    include 'connection.php';
    $q = "SELECT * FROM `about`";
    $res = mysqli_query($conn , $q);
    $row = mysqli_fetch_assoc($res);
?>
<section class="htc__blog__details bg__white ptb--100">
    <div class="container">
    <div class="row">
    <div class="col-xs-12 col-lg-12">
    <div class="htc__blog__details__wrap">
    <div class="ht__bl__thumb">
    <?php
    echo '<img src="../cc/about/'.$row['about_poster'].'" alt="poster image">';
    ?>
    </div>
    <div class="bl__dtl">
    <?php
    echo "<p style='direction:rtl'>".$row['about_about_ar']."</p>";
    echo "<blockquote style='direction:rtl'>".$row['about_about_attention_ar']."</blockquote>";
    ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="bl__img">
    <?php
    echo '<img src="../cc/about/'.$row['about_first_image'].'" alt="about images">';
    ?>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="bl__img">
    <?php
    echo '<img src="../cc/about/'.$row['about_second_image'].'" alt="about images">';
    ?>
    </div>
    </div>
    </div>
    <?php
    echo "<p style='direction:rtl'>".$row['about_image_ar']."</p>";
    ?>
    </div>                          
    </div>
    </div>  
    </div>
    </div>
</section>
<?php
}
////////////////////////////////////////////gallery_1/////////////////////////////////////////////
function gallery_1(){
?>
<section>
    <div class="container">
        <div class="row">
        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="men">Men</button>
            <button class="btn btn-default filter-button" data-filter="women">Women</button>
            <button class="btn btn-default filter-button" data-filter="soap">Soap</button>
            <button class="btn btn-default filter-button" data-filter="perfume">Perfume</button>
        </div>
        <br/>
        <!-- 365x365 -->

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter men">
                <img src="images/product/1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter women">
                <img src="images/product/1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter men">
                <img src="images/product/1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter perfume">
                <img src="images/product/1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter soap">
                <img src="images/product/1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter perfume">
                <img src="images/product/1.jpg" class="img-responsive">
            </div>

        </div>
    </div>
</section>
<style>
    .gallery-title
    {
        font-size: 36px;
        color: #42B32F;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }
    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }
    .filter-button
    {
        font-size: 18px;
        border: 1px solid goldenrod;
        border-radius: 5px;
        text-align: center;
        color: grey;
        margin-bottom: 30px;

    }
    .filter-button:hover
    {
        font-size: 18px;
        border: 1px solid gold;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: goldenrod;;

    }
    .btn-default:active .filter-button:active
    {
        background-color: #42B32F;
        color: white;
    }

    .port-image
    {
        width: 100%;
    }

    .gallery_product
    {
        margin-bottom: 30px;
    }
</style>
<script>
    $(document).ready(function(){

    $(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
    //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
    //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
    });

    if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
    }
    $(this).addClass("active");

    });
</script>
<?php
}
////////////////////////////////////////////perfume/////////////////////////////////////////////
function gallery_perfume(){
?>
<section>
            <div class="container">
                <div class="row">
                <div align="center">
                    <?php
                    include 'connection.php';
                    $q ="SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id` = 1";
                    $res = mysqli_query($conn , $q);
                    while($row=mysqli_fetch_assoc($res)){
                        echo '<button style="margin-left:4px; direction:rtl ;" class="btn btn-default filter-button" data-filter="'.$row['sub_cat_title'].'">'.$row['sub_cat_title_ar'].'</button>';                
                    }
                    ?>
                    <button class="btn btn-default filter-button" data-filter="all">الكل</button>
                </div>
                <br/>
                <!-- 365x365 -->
                <?php
                    include 'connection.php';
                    $q = "SELECT * FROM `product`,`sub_cat` WHERE `sub_cat_id` = `product_sub_cat_id` AND `sub_cat_cat_id` = 1";
                    $res = mysqli_query($conn , $q);
                    while($row = mysqli_fetch_assoc($res)){
                            echo '<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter '.$row['pro_sub_title'].'">';
                            echo '<a href="products.php?id='.$row['product_id'].'">';
                            echo ' <img src="../cc/products/'.$row['product_image'].'" class="img-responsive">';
                            echo '</a>';
                            echo '<div style="background:#111111;color:#ffffff ; height:30px ; font-size:20px; text-align:center">'.$row['product_title_ar'].'</div>';
                            echo '</div>';  
                    }
    
                ?>
                </div>
            </div>
</section>
<style>
            .gallery-title
            {
                font-size: 36px;
                color: #42B32F;
                text-align: center;
                font-weight: 500;
                margin-bottom: 70px;
            }
            .gallery-title:after {
                content: "";
                position: absolute;
                width: 7.5%;
                left: 46.5%;
                height: 45px;
                border-bottom: 1px solid #5e5e5e;
            }
            .filter-button
            {
                font-size: 18px;
                border: 1px solid goldenrod;
                border-radius: 5px;
                text-align: center;
                color: grey;
                margin-bottom: 30px;
        
            }
            .filter-button:hover
            {
                font-size: 18px;
                border: 1px solid gold;
                border-radius: 5px;
                text-align: center;
                color: #ffffff;
                background-color: goldenrod;;
        
            }
            .btn-default:active .filter-button:active
            {
                background-color: #42B32F;
                color: white;
            }
        
            .port-image
            {
                width: 100%;
            }
        
            .gallery_product
            {
                margin-bottom: 30px;
            }
</style>
<script>
            $(document).ready(function(){
        
            $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            
            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
            //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
                
            }
            });
        
            if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
            $(this).addClass("active");
        
            });
</script>
<?php
}
////////////////////////////////////////////gallery/////////////////////////////////////////////
function gal(){
?>
<div class="container gallery-container">
    <div class="tz-gallery">

    <div class="row">
        <?php
        include 'connection.php';
        $results_per_page = 6;
        $q = "SELECT * FROM `gallery`";
        $rest = mysqli_query($conn , $q);
        $number_of_results = mysqli_num_rows($rest);
        $number_of_pages = ceil($number_of_results/$results_per_page);
        if (!isset($_GET['page'])) {
        $page = 1;
        $pre =1;
        $next=1;
        } else {
            if($_GET['page']<1) $page=1;
            else {$page =preg_replace('#[^0-9]#','', $_GET['page']);}
        $pre = $page-1;
        $next = $page+1;
        }
        if($pre<1 || $page <1){
            $pre = 1;
            $page=1;
        }else if($next > $number_of_pages || $page>$number_of_pages){
            $next = $number_of_pages;
            $page = $number_of_pages;
        }
        $this_page_first_result = ($page-1)*$results_per_page;
        $sql='SELECT * FROM `gallery` ORDER BY `gallery_id` DESC LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $res = mysqli_query($conn , $sql);
        while($row=mysqli_fetch_assoc($res)){
            echo '<div class="col-sm-6 col-md-4">';
            echo '<a class="lightbox" href="../cc/gallery/'.$row['gallery_image'].'">';
            echo '<img src="../cc/gallery/'.$row['gallery_image'].'" alt="gallery">';
            echo '</a></div>';
        }
        ?>
    </div>
    </div>
    <!-- pagination -->
    <div class="row">
        <div class="col-xs-12">
            <ul class="htc__pagenation">
                <?php    
                echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page=' . $pre . '"><i class="zmdi zmdi-chevron-left"></i></a></li>';
                for ($page=1;$page<=$number_of_pages;$page++) {
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page=' . $page . '">' . $page . '</a> </li>';
                }
                echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page=' . $next . '"><i class="zmdi zmdi-chevron-right"></i></a></li>';
                ?>
                
            </ul>
        </div>
    </div>
<div style='height:20px'></div>
</div>
<style>
    /* body {
        background-image: linear-gradient(to top, #ecedee 0%, #eceeef 75%, #e7e8e9 100%);
        min-height: 100vh;
        font: normal 16px sans-serif;
        padding: 60px 0;
    } */

    .container.gallery-container {
        background-color: #fff;
        color: #35373a;
        min-height: 100vh;
        border-radius: 20px;
        /* box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06); */
    }

    .gallery-container h1 {
        text-align: center;
        margin-top: 70px;
        font-family: 'Droid Sans', sans-serif;
        font-weight: bold;
    }

    .gallery-container p.page-description {
        text-align: center;
        max-width: 800px;
        margin: 25px auto;
        color: #888;
        font-size: 18px;
    }

    .tz-gallery {
        padding: 40px;
    }

    .tz-gallery .lightbox img {
        width: 100%;
        margin-bottom: 30px;
        transition: 0.2s ease-in-out;
        box-shadow: 0 2px 3px rgba(0,0,0,0.2);
    }


    .tz-gallery .lightbox img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    }

    .tz-gallery img {
        border-radius: 4px;
    }

    .baguetteBox-button {
        background-color: transparent !important;
    }


    @media(max-width: 768px) {
        body {
            padding: 0;
        }

        .container.gallery-container {
            border-radius: 0;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<?php
}
////////////////////////////////////////////soap/////////////////////////////////////////////
function gallery_soap(){
?>
<section>
        <div class="container">
            <div class="row">
            <div align="center">
                <?php
                include 'connection.php';
                $q ="SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id` = 2";
                $res = mysqli_query($conn , $q);
                while($row=mysqli_fetch_assoc($res)){
                    echo '<button style="margin-left:4px;" class="btn btn-default filter-button" data-filter="'.$row['sub_cat_title'].'">'.$row['sub_cat_title_ar'].'</button>';                
                }
                ?>
                <button class="btn btn-default filter-button" data-filter="all">الكل</button>
            </div>
            <br/>
            <!-- 365x365 -->
            <?php
                include 'connection.php';
                $q = "SELECT * FROM `product`,`sub_cat` WHERE `sub_cat_id` = `product_sub_cat_id` AND `sub_cat_cat_id` = 2";
                $res = mysqli_query($conn , $q);
                while($row = mysqli_fetch_assoc($res)){
                        echo '<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter '.$row['pro_sub_title'].'">';
                        echo '<a href="products.php?id='.$row['product_id'].'">';
                        echo ' <img src="../cc/products/'.$row['product_image'].'" class="img-responsive">';
                        echo '</a>';
                        echo '<div style="background:#111111;color:#ffffff ; height:30px ; font-size:20px; text-align:center">'.$row['product_title_ar'].'</div>';
                        echo '</div>';  
                }

            ?>
            </div>
        </div>
</section>
<style>
            .gallery-title
            {
                font-size: 36px;
                color: #42B32F;
                text-align: center;
                font-weight: 500;
                margin-bottom: 70px;
            }
            .gallery-title:after {
                content: "";
                position: absolute;
                width: 7.5%;
                left: 46.5%;
                height: 45px;
                border-bottom: 1px solid #5e5e5e;
            }
            .filter-button
            {
                font-size: 18px;
                border: 1px solid goldenrod;
                border-radius: 5px;
                text-align: center;
                color: grey;
                margin-bottom: 30px;
        
            }
            .filter-button:hover
            {
                font-size: 18px;
                border: 1px solid gold;
                border-radius: 5px;
                text-align: center;
                color: #ffffff;
                background-color: goldenrod;;
        
            }
            .btn-default:active .filter-button:active
            {
                background-color: #42B32F;
                color: white;
            }
        
            .port-image
            {
                width: 100%;
            }
        
            .gallery_product
            {
                margin-bottom: 30px;
            }
</style>
<script>
            $(document).ready(function(){
        
            $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            
            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
            //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
                
            }
            });
        
            if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
            $(this).addClass("active");
        
            });
</script>
<?php
}
////////////////////////////////////////////product details/////////////////////////////////////////////
function products_details(){
?>
<section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12" style='float:right'>
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <?php
                                include 'connection.php';
                                if(isset($_GET['id'])){
                                    $id = $_GET['id'];
                                    $q="SELECT * FROM `product` WHERE `product_id` = '{$id}'";
                                    $res=mysqli_query($conn ,$q);
                                    $row = mysqli_fetch_assoc($res);
                                }
                                ?>
                                <div class="product__big__images" style='direction:rtl ;float:right'>
                                    <div class="portfolio-full-image tab-content" style='direction:rtl ; float:right'>
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1" style='direction:rtl ; float:right'>
                                            <?php
                                            echo '<img src="../cc/products/'.$row['product_image'].'" alt="full-image" style="direction:rtl ; float:right">';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40" style='direction:rtl ; float:left'>
                            <div class="ht__product__dtl">
                                <?php
                                
                                echo "<h2>".$row['product_title_ar']."<h2>";
                                if($row['product_rating']==1){
                                    echo "<ul class='rating'>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "</ul>";
                                }
                                else if($row['product_rating']==2){
                                    echo "<ul class='rating'>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "</ul>";
                                }
                                else if($row['product_rating']==3){
                                    echo "<ul class='rating'>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "</ul>";
                                }
                                else if($row['product_rating']==4){
                                    echo "<ul class='rating'>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li class='old'><i class='icon-star icons'></i></li>";
                                    echo "</ul>";
                                }
                                else if($row['product_rating']==5){
                                    echo "<ul class='rating'>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "<li><i class='icon-star icons'></i></li>";
                                    echo "</ul>";
                                }
                                echo '<ul  class="pro__prize">';
                                echo '<li>'.$row['product_price'].'$</li>';
                                echo '</ul>';
                                if(!isset($_SESSION['customer_logged'])){
                                    echo "<ul class='product__action--dft' style='margin-left:30px'>";
                                    echo "<li><a data-toggle='modal' data-target='#login'><i class='icon-handbag icons'></i></a></li></ul>";
                                    echo "</div></div></div></div>";
                                }else{
                                echo "<ul class='product__action--dft' style='margin-left:30px'>";
                                echo "<li><a href='add_to_wishlist.php?id=".$row['product_id']."'><i class='icon-handbag icons'></i></a></li></ul>";
                                echo "</div></div></div></div>";
                                }
                                echo '<p class="pro__info" style="direction:rtl ; float:right ; margin-right:150px;">'.$row['product_description_ar'].'</p>';
                                ?>                               
                                <!-- <div class="ht__pro__desc">
                                    <div class="sin__desc">
                                        <p><span>Availability:</span> In Stock</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
</section>

<section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View -->
                        <ul class="pro__details__tab" role="tablist" style="direction:rtl ; float:right">
                            <li role="presentation" class="description active" style="direction:rtl ; float:right"><a href="#description" role="tab" data-toggle="tab">الوصف</a></li>
                            <li role="presentation" class="review" style="direction:rtl ; float:right"><a href="#ingredients" role="tab" data-toggle="tab">المكوينات</a></li>
                        </ul>
                        <!-- End List And Grid View -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content" style="direction:rtl ; float:right">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                                <div class="pro__tab__content__inner">
                                    <h4 class="ht__pro__title">الوصف</h4>
                                    <?php
                                    echo '<p class="pro__info">'.$row['product_description_ar'].'</p>';
                                    ?>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="ingredients" class="pro__single__content tab-pane fade">
                                <div class="pro__tab__content__inner">
                                    <h4 class="ht__pro__title">المكوينات</h4>
                                    <?php
                                    $ing_id[]='';
                                    $mix_id= $row['product_mix'];
                                    $q = "SELECT * FROM `mix_contains` WHERE `mix_id`='{$mix_id}'";
                                    $res = mysqli_query($conn , $q);
                                    while($row = mysqli_fetch_assoc($res)){
                                        $ing_id[] = $row['ing_id'];
                                    }
                                    foreach($ing_id as $a){
                                        $q = "SELECT * FROM `ingredient` WHERE `ingredient_id` = '{$a}'";
                                        $res = mysqli_query($conn , $q);
                                        while($row = mysqli_fetch_assoc($res)){
                                            echo "<div style='margin-bottom:30px ;'>";
                                            echo "<img src='../cc/ingredients/".$row['ingredient_image']."' style='height:150px ; width:150px ; border-radius:20px  ; direction:rtl' />";
                                            echo "<div style='background-color:#F3F3F3 ;float:left; border-radius:10px ; height: auto; margin-left:100px ; margin-top:30px ; margin-bottom:20px ; margin-right: 20px'>";
                                            echo "<p></p>";
                                            echo "<h4 style='margin-right:20px'>".$row['ingredient_name']."</h4><br>";
                                            echo "<div style='direction:rtl ; float:right ; margin-right:10px ; margin-left:10px'>".$row['ingredient_desc_ar']."</div><br>";
                                            echo "<p></p>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php
}
////////////////////////////////////////////modals/////////////////////////////////////////////
function modals(){
?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
        <label>Username</label>
        <input type='text' name='username' placeholder='username'/>
        <br><br>
        <label>Password</label>
        <input type='password' name='password' placeholder='password'/>
        <br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning">Login</button>
      </div>
    </div>
  </div>
</div>
<?php
}
////////////////////////////////////////////modals/////////////////////////////////////////////
function signup(){
?>
<section class="htc__contact__area ptb--100 bg__white">
                <div class="container">
                    <div class="row">
                        <div class="contact-form-wrap mt--60" style='margin-top:-50px'>
                            <div class="col-xs-12">
                                <div class="contact-title">
                                    <h2 class="title__line--6" style="direction:rtl;float:right">انشاء حساب</h2>
                                </div>
                            </div>
                            <div class="col-xs-12">
    
                                <form id="contact-form" action="#" method="post">
                                    <div class="single-contact-form">
                                        <div class="contact-box name">
                                            <input type="text" name="signup_username" placeholder="Username">
                                            <input type="password" name="signup_password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box subject">
                                            <input type="email" name="signup_email" placeholder="Email" required />
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box subject">
                                            <input type="text" name="signup_number" placeholder="Phone Number" required />
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box message">
                                            <textarea name="signup_address" placeholder="Your Address" required></textarea>
                                        </div>
                                    </div>
    
                                    <div class="contact-btn">
                                        <input type='submit' class="fv-btn" name='signup' value='تسجيل' onclick="passCheck()"/>
                                    </div>
                                    <?php
                                    include 'connection.php';
                                    if(isset($_POST['signup'])){
                                        $username = $_POST['signup_username'];
                                        $password = $_POST['signup_password'];
                                        $email = $_POST['signup_email'];
                                        $number = $_POST['signup_number'];
                                        $address = $_POST['signup_address'];
                                        $q="INSERT INTO `customer`(`customer_username`, `customer_password`, `customer_email`, `customer_number`, `customer_address`) 
                                            VALUES ('{$username}' , '{$password}' , '{$email}' , '{$number}' , '{$address}')";
                                        $res = mysqli_query($conn , $q);
                                    }
                                    ?>
                                </form>
                                
                                <div class="form-output">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
</section>
<?php
}
//////////////////////////////////////testimonial////////////////////////////////////////////////
function account_info(){
?>
<section class="htc__contact__area ptb--100 bg__white">
                    <div class="container">
                        <div class="row">
                            <div class="contact-form-wrap mt--60" style='margin-top:-50px'>
                                <div class="col-xs-12">
                                    <div class="contact-title">
                                        <h2 class="title__line--6">Account Infos</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <?php
                                    include 'connection.php';
                                    $cus_id = $_SESSION['customer_logged'];
                                    $q = "SELECT * FROM `customer` WHERE `customer_id` = '{$cus_id}'";
                                    $res = mysqli_query($conn , $q);
                                    $row = mysqli_fetch_assoc($res);
                                    $old_p = $row['customer_password']
                                    ?>
                                    <form id="contact-form" action="#" method="post">
                                        <div class="single-contact-form">
                                            <div class="contact-box name">
                                                <input type="text" name="user" value="<?php echo $row['customer_username'] ?>" disabled>
                                                <input type="password" name="old_pass" placeholder="Old Password">
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box subject">
                                                <input type="password" name="new_pass" placeholder="New Password" required />
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box subject">
                                                <input type="email" name="email" value="<?php echo $row['customer_email'] ?>" disabled />
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box subject">
                                                <input type="text" name="number" placeholder="Phone Number" value="<?php echo $row['customer_number'] ?>" required />
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box message">
                                                <textarea name="address" placeholder="Your Address" required><?php echo $row['customer_address']?></textarea>
                                            </div>
                                        </div>
        
                                        <div class="contact-btn">
                                            <input type='submit' class="fv-btn" name='modify' value='Modify' onclick="passCheck()"/>
                                        </div>
                                        <?php
                                        include 'connection.php';
                                        if(isset($_POST['modify'])){
                                            $user = $row['customer_username'];
                                            $old_pass = $_POST['old_pass'];
                                            $new_pass = $_POST['new_pass'];
                                            $email = $row['customer_email'];
                                            $number = $_POST['number'];
                                            $address = $_POST['address'];
                                            if($old_pass == $old_p){
                                            $q="UPDATE `customer` SET `customer_password`='{$new_pass}',`customer_number`='{$number}',`customer_address`='{$address}' WHERE `customer_username` = '{$user}'";
                                            $res = mysqli_query($conn , $q);
                                            echo "<script>";
                                            echo "window.location.assign('index.php');";
                                            echo "</script>";
                                            }
                                        }
                                        ?>
                                    </form>
                                    
                                    <div class="form-output">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
</section>
<?php
}
//////////////////////////////////////testimonial////////////////////////////////////////////////
?>
