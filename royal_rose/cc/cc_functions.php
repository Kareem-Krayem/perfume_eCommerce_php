<?php
function head(){
?>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Royal Rose</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function login(){
?>
<body class="animsition">
    <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                                    <img src="../en/images/logo/royal_b.PNG" alt="CoolAdmin" style="width: auto ; height:150px">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input class="au-input au-input--full" type="text" name="user" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <input class="au-input au-input--full" type="password" name="pass" placeholder="Password">
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">sign in</button>
                                    <?php
                                    include 'connection.php';
                                    if(isset($_POST['login'])){
                                        $username =mysqli_real_escape_string($conn,$_POST['user']);
                                        $password=mysqli_real_escape_string($conn,$_POST['pass']);
                                        $query = "SELECT * FROM user WHERE user_username = '{$username}' AND user_password = '{$password}'";
                                        if(!empty($username) && !empty($password)){
                                            $res = mysqli_query($conn , $query);
                                            $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                                            $count = mysqli_num_rows($res);
                                            if( $count ==1 ){
                                                switch ($row['user_role']){
                                                    case 1 : header("location:index.php");
                                                    $_SESSION['user_logged'] = $username;
                                                    break;
                                                    case 2 : header("location:index2.php");
                                                    $_SESSION['user_logged'] = $username;
                                                    break;
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function mobile_nav(){
?>
<body class="animsition">
<div class="page-wrapper">
<header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
        <div class="container-fluid">
        <div class="header-mobile-inner">
        <a class="logo" href="index.php">
        <img src="../en/images/logo/royal_b.PNG" alt="RoyalRose" style="width:130px ; height:75px"/>
        </a>
        <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
        <span class="hamburger-inner"></span>
        </span>
        </button>
        </div>
        </div>
        </div>
        <nav class="navbar-mobile">
        <div class="container-fluid">
        <ul class="navbar-mobile__list list-unstyled">
        <li>
        <a class="js-arrow" href="index.php">
        <i class="fas fa-home"></i>Home</a>
        </li>
        <li>
        <a class="js-arrow" href="slider.php">
        <i class="fas fa-image"></i>Slider</a>
        </li>
        <li>
        <a href="chart.html">
        <i class="fas fa-chart-bar"></i>Charts</a>
        </li>
        <li>
        <a href="table.html">
        <i class="fas fa-table"></i>Tables</a>
        </li>
        <li>
        <a href="form.html">
        <i class="far fa-check-square"></i>Forms</a>
        </li>
        <li>
        <a href="#">
        <i class="fas fa-calendar-alt"></i>Calendar</a>
        </li>
        <li>
        <a href="map.html">
        <i class="fas fa-map-marker-alt"></i>Maps</a>
        </li>
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-copy"></i>Pages</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
        <a href="login.html">Login</a>
        </li>
        <li>
        <a href="register.html">Register</a>
        </li>
        <li>
        <a href="forget-pass.html">Forget Password</a>
        </li>
        </ul>
        </li>
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-desktop"></i>UI Elements</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
        <a href="button.html">Button</a>
        </li>
        <li>
        <a href="badge.html">Badges</a>
        </li>
        <li>
        <a href="tab.html">Tabs</a>
        </li>
        <li>
        <a href="card.html">Cards</a>
        </li>
        <li>
        <a href="alert.html">Alerts</a>
        </li>
        <li>
        <a href="progress-bar.html">Progress Bars</a>
        </li>
        <li>
        <a href="modal.html">Modals</a>
        </li>
        <li>
        <a href="switch.html">Switchs</a>
        </li>
        <li>
        <a href="grid.html">Grids</a>
        </li>
        <li>
        <a href="fontawesome.html">Fontawesome Icon</a>
        </li>
        <li>
        <a href="typo.html">Typography</a>
        </li>
        </ul>
        </li>
        </ul>
        </div>
        </nav>
</header>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function navigation(){
?>
<aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
        <a href="index.php">
        <img src="../en/images/logo/royal_b.PNG" alt="Cool Admin" style="height: 85px ; width:auto"/>
        </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
        <li>
        <a class="js-arrow" href="orders_tables.php">
        <img src='images/icon/orders.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Orders</a>
        </li>
        <li>
        <a class="js-arrow" href="index.php">
        <img src='images/icon/home.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Home</a>
        </li>
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <img src='images/icon/mix.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Mix</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
            <a class="js-arrow" href="mix_mix.php">
            <img src='images/icon/mix.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Mix Name</a>
            </li>
            <li>
            <a class="js-arrow" href="mix_ingredients.php">
            <img src='images/icon/ingredient.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Ingredients</a>
            </li>
            <li>
            <a class="js-arrow" href="assign_mix.php">
            <img src='images/icon/assign.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Assign Mix</a>
            </li>
        </ul>
        </li>
        <li>
        <a class="js-arrow" href="category.php">
        <img src='images/icon/category.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Category</a>
        </li>
        <li>
        <a class="js-arrow" href="perfume.php">
        <img src='images/icon/perfume.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Perfume</a>
        </li>
        <li>
        <a class="js-arrow" href="soap.php">
        <img src='images/icon/soap.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Soap</a>
        </li>
        <li>
        <a class="js-arrow" href="gallery.php">
        <img src='images/icon/image.png' style='height:30px ; width:30px ; margin-bottom:10px'/></i>Gallery</a>
        </li>
        <li>
        <a class="js-arrow" href="about.php">
        <img src='images/icon/about.png' style='height:30px ; width:30px ; margin-bottom:10px'/>About us</a>
        </li>
        <li>
        <a class="js-arrow" href="contact_us.php">
        <img src='images/icon/contact.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Contact</a>
        </li>
        <li>
        <a class="js-arrow" href="footer.php">
        <img src='images/icon/footer_about.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Footer</a>
        </li>
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <img src='images/icon/setting.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Tables</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
            <a class="js-arrow" href="home_tables.php">
            <img src='images/icon/home.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Home</a>
            </li>
            <li>
            <a class="js-arrow" href="category_table.php">
            <img src='images/icon/category.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Category</a>
            </li>
            <li>
            <a class="js-arrow" href="all_products.php">
            <img src='images/icon/products.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Products</a>
            </li>
            <li>
            <a class="js-arrow" href="gallery_table.php">
            <img src='images/icon/image.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Gallery</a>
            </li>
            <li>
            <a class="js-arrow" href="about_table.php">
            <img src='images/icon/about.png' style='height:20px ; width:20px ; margin-bottom:10px'/>About us</a>
            </li>
            <li>
            <a href="maps_table.php">
            <img src='images/icon/pin.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Maps</a>
            </li>
            <li>
            <a class="js-arrow" href="footer_table.php">
            <img src='images/icon/footer_about.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Footer</a>
            </li>
            <a class="js-arrow" href="contact.php">
            <img src='images/icon/contact.png' style='height:20px ; width:20px ; margin-bottom:10px'/>Contact</a>
            </li>
        </ul>
        </li>
        <li>
        <a href="map.php">
        <img src='images/icon/pin.png' style='height:30px ; width:30px ; margin-bottom:10px'/>Maps</a>
        </li>
        </ul>
        </nav>
        </div>
</aside>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function top(){
?>
<div class="page-container">
<header class="header-desktop">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
        <div class="header-wrap">
        <form class="form-header" action="" method="POST">
        </form>
        <div class="header-button">
        <div class="noti-wrap">
        <div class="noti__item js-item-menu">
        <div class="email-dropdown js-dropdown">
        <div class="email__item">
        <div class="image img-cir img-40">
        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
        </div>
        </div>
        <div class="email__item">
        </div>
        </div>
        </div>
        </div>
        <div class="account-wrap">
        <div class="account-item clearfix js-item-menu">
        <div class="content">
        <a class="js-acc-btn" id='user_logged' href="#">
        <i class="fas fa-user"></i>
        <div id='user_logged'></div>
        </a>
        </div>
        
        <div class="account-dropdown js-dropdown">
        <div class="account-dropdown__body">
        <div class="account-dropdown__item">
        <a href="account.php">
        <i class="zmdi zmdi-account"></i>Account</a>
        </div>  
        </div>
        <div class="account-dropdown__footer">
        <a href="logout.php">
        <i class="zmdi zmdi-power"></i>Logout</a>
        </div>
        </div>
    
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</header>
<script>
    onload(fill_user_logged());
    function fill_user_logged(){
        var user_logged = document.getElementById('user_logged');
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", 'fillUserLogged.php' , true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    user_logged.innerHTML = this.responseText;
                }
            };
            xhttp.send();
    }
</script>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function footer(){
?>
<!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
<!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function home(){
?>
<div class="main-content">
    <div class="section__content section__content--p30">
    <u><h1>Home</h1></u>
    <br>

    <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">Slider</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate" enctype="multipart/form-data">

        <div class="form-group">
        <label class="control-label mb-1">Title</label>
        <input name="title" type="text" class="form-control" autocomplete='off'>
        </div>

        <div class="form-group">
        <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
        <input name="title_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
        </div>

        <div class="form-group">
        <label class="control-label mb-1" >Name</label>
        <input name="nam" type="text" class="form-control" autocomplete='off' >
        </div>

        <div class="form-group">
        <label class="control-label mb-1" style='direction:rtl ; float :right'>الأسم</label>
        <input name="nam_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
        </div>
        
        <div class="row form-group">
        <div class="col col-md-3">
        <label for="file-input" class=" form-control-label">Image</label>
        </div>
        <div class="col-12 col-md-9">
        <input type="file" name="photo" class="form-control-file">
        </div>
        </div>                
        <div>
        <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </button>
        </div>
        </form>
        <?php
        include 'connection.php';
        if(isset($_POST['upload'])){
            $name = $_FILES['photo']['name'];
            $nam=$_POST['nam'];
            $nam_ar=$_POST['nam_ar'];
            $title=$_POST['title'];
            $title_ar=$_POST['title_ar'];
            $dir = "slider/";
            $target_files = $dir .basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
            $ex_array = array("jpg" , "jpeg" , "png");
            if(in_array($imageFileType , $ex_array)){
                $q = "INSERT INTO `slider`(`slider_title`, `slider_title_ar`, `slider_name`, `slider_name_ar`, `slider_image`) 
                      VALUES ('{$title}' , '{$title_ar}' , '{$nam}' , '{$nam_ar}' , '{$name}')";
                $res = mysqli_query($conn , $q) or die("Error!!");
                move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
            }
        }
        ?>
        </div>
    </div>

    <!-- <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">New Arrivals</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        <div class="form-group">
        <label for="cc-payment" class="control-label mb-1">Title</label>
        <input autocomplete='off' id="cc-pament" name="arrivals_title" type="text" class="form-control" aria-required="true" aria-invalid="false">
        </div>
        <div class="form-group">
        <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
        <input name="arrivals_title_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
        </div>
        <div class="form-group has-success">
        <label for="cc-name" class="control-label mb-1">Price</label>
        <input id="cc-name" name="arrivals_price" type="number" min='1' class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
        autocomplete="off" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
        </div>
        
        <div class="form-group has-success">
        <label for="cc-name" class="control-label mb-1">Rating</label>
        <input id="cc-name" name="arrivals_rating" type="number" max='5' min='1' class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
        </div> 
                        
        <div class="row form-group">
        <div class="col col-md-3">
        <label for="file-input" class=" form-control-label">Image</label>
        </div>
        <div class="col-12 col-md-9">
        <input type="file" name="photo" class="form-control-file">
        </div>
        </div>                
        <div>
        <input type="submit" name="new_arrivals" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </button>
        </div>
        </form>
        <?php
        include 'connection.php';
        if(isset($_POST['new_arrivals'])){
            $name = $_FILES['photo']['name'];
            $title = $_POST['arrivals_title'];
            $title_ar = $_POST['arrivals_title_ar'];
            $price = $_POST['arrivals_price'];
            $rating = $_POST['arrivals_rating'];
            $dir = "new_arrivals/";
            $target_files = $dir .basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
            $ex_array = array("jpg" , "jpeg" , "png");
            if(in_array($imageFileType , $ex_array)){
                $q = "INSERT INTO `arrivals`(`arrivals_title`,`arrivals_title_ar`, `arrivals_rating`, `arrivals_price`, `arrivals_image`) 
                    VALUES ('{$title}' ,'{$title_ar}' , '{$rating}' , '{$price}' , '{$name}')";
                $res = mysqli_query($conn , $q) or die("Error!!");
                move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
            }
        }
        ?>
        </div>
    </div> -->

    <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">Testimonial</h3>
            </div>
            <hr>
                <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Name</label>
                    <input id="cc-pament" name="testimonial_name" type="text" class="form-control" aria-required="true" aria-invalid="false" autocomplete='off'>
                    </div>

                    <div class="form-group">
                    <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
                    <input name="testimonial_name_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
                    </div>

                    <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">About</label>
                    <textarea class="form-control cc-name valid" name="testimonial_about" autocomplete='off'></textarea>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group">
                    <label class="control-label mb-1" style='direction:rtl ; float :right'>عن</label>
                    <textarea class="form-control cc-name valid" name="testimonial_about_ar" autocomplete='off' style='direction:rtl ;'></textarea>
                    </div>
                    
                    <div class="row form-group">
                    <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="photo" class="form-control-file">
                    </div>
                    </div>
                    
                    <div>
                    <input type="submit" name="testimonial_add" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </div>
                    <?php
        include 'connection.php';
        if(isset($_POST['testimonial_add'])){
            $name = $_FILES['photo']['name'];
            $namee = $_POST['testimonial_name'];
            $namee_ar = $_POST['testimonial_name_ar'];
            $about = $_POST['testimonial_about'];
            $about_ar = $_POST['testimonial_about_ar'];
            $dir = "testimonials/";
            $target_files = $dir .basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
            $ex_array = array("jpg" , "jpeg" , "png");
            if(in_array($imageFileType , $ex_array)){
                $q = "INSERT INTO `testimonial`(`testimonial_name`,`testimonial_name_ar`, `testimonial_about`,`testimonial_about_ar`, `testimonial_image`) 
                    VALUES ('{$namee}' , '{$namee_ar}' , '{$about}' , '{$about_ar}' , '{$name}')";
                $res = mysqli_query($conn , $q) or die("Error!!");
                move_uploaded_file($_FILES['photo']['tmp_name'] , $target_files);
            }
        }
        ?>
                </form>
            </div>
    </div>

    <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">Blog</h3>
            </div>
            <hr>
                <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Title</label>
                    <input id="cc-name" name="blog_title" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group">
                    <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
                    <input name="blog_title_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
                    </div>
                    
                    <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Name</label>
                    <input id="cc-pament" name="blog_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    
                    <div class="form-group">
                    <label class="control-label mb-1" style='direction:rtl ; float :right'>الأسم</label>
                    <input name="blog_name_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
                    </div>

                    <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Description</label>
                    <textarea class="form-control cc-name valid" name="blog_desc" autocomplete='off'></textarea>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group">
                    <label class="control-label mb-1" style='direction:rtl ; float :right'>الوصف</label>
                    <textarea class="form-control cc-name valid" name="blog_desc_ar" autocomplete='off' style='direction:rtl ;'></textarea>
                    </div>

                    <div class="row form-group">
                    <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="photo" class="form-control-file">
                    </div>
                    </div>
                    
                    <div>
                    <input type="submit" name="blog_add" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                    </div>
                    <?php
                    include 'connection.php';
        if(isset($_POST['blog_add'])){
            $name = $_FILES['photo']['name'];
            $desc = $_POST['blog_desc'];
            $desc_ar = $_POST['blog_desc_ar'];
            $title = $_POST['blog_title'];
            $title_ar = $_POST['blog_title_ar'];
            $namee = $_POST['blog_name'];
            $namee_ar = $_POST['blog_name_ar'];
            $dir = "blogs/";
            $target_files = $dir .basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
            $ex_array = array("jpg" , "jpeg" , "png");
            if(in_array($imageFileType , $ex_array)){
                $q = "INSERT INTO `blog`(`blog_title`, `blog_title_ar`, `blog_name`, `blog_name_ar`, `blog_description`, `blog_description_ar`, `blog_image`) 
                      VALUES ('{$title}','{$title_ar}','{$namee}','{$namee_ar}','{$desc}','{$desc_ar}','{$name}' )";
                $res = mysqli_query($conn , $q) or die("Error!!");
                move_uploaded_file($_FILES['photo']['tmp_name'] , $target_files);
            }
        }
        ?>
                </form>
            </div>
    </div>

    <div style='height:20px'></div> 
    </div>
    </div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function account(){
?>
<div class="main-content">
    <div class="section__content section__content--p30">
    <u><h1>Account</h1></u>
    <br>
    <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">My Account</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate">
        <div class="form-group">
        <label for="cc-payment" class="control-label mb-1">Username</label>
        <input autocomplete='off' id="cc-pament" name="account_username" type="text" class="form-control" aria-required="true" aria-invalid="false" value='<?php echo $_SESSION['user_logged']?>'>
        </div>
        <div class="form-group has-success">
        <label for="cc-name" class="control-label mb-1">Password</label>
        <input id="cc-name" name="account_password" type="password" min='1' class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
        autocomplete="off" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
        </div>
                                      
        <div>
        <input type="submit" name="account_change" class="btn btn-lg btn-info btn-block btn-warning" value="Change">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </button>
        </div>
        <?php
        include 'connection.php';
        if(isset($_POST['account_change'])){
            $user_logged = $_SESSION['user_logged'];
            $username = $_POST['account_username'];
            $password = $_POST['account_password'];

            $q = "UPDATE `user` SET `user_username`='{$username}',`user_password`='{$password}' WHERE `user_username`= '{$user_logged}'";
            $res = mysqli_query($conn , $q);
        }
        ?>
        </form>
        </div>
    </div>
    <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">New Account</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate">
        <div class="form-group">
        <label for="cc-payment" class="control-label mb-1">Username</label>
        <input autocomplete='off' id="cc-pament" name="new_account_username" type="text" class="form-control" aria-required="true" aria-invalid="false">
        </div>
        <div class="form-group has-success">
        <label for="cc-name" class="control-label mb-1">Password</label>
        <input id="cc-name" name="new_account_password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
        autocomplete="off" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
        </div>  
        <div class="form-group has-success">
        <label for="cc-name" class="control-label mb-1">Role</label>
        <input id="cc-name" name="new_account_role" type="number" min='1' class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
        autocomplete="off" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
        </div>              
        <div>
        <input type="submit" name="new_account_add" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </button>
        </div>
        <?php
        include 'connection.php';
        if(isset($_POST['new_account_add'])){
            $username = $_POST['new_account_username'];
            $password = $_POST['new_account_password'];
            $role = $_POST['new_account_role'];

            $q = "INSERT INTO `user` (`user_username`, `user_password`, `user_role`)
                  VALUES ('{$username}' , '{$password}' , '{$role}')";
            $res = mysqli_query($conn , $q);
        }
        ?>
        </form>
        </div>
    </div>

    <div style='height:20px'></div> 
    </div>
    </div>
</div>
<?php   
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function perfume(){
?>
<div class="main-content">
        <div class="section__content section__content--p30">
        <u><h1>Perfume</h1></u>
        <br>
    
        <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">New Product</h3>
            </div>
            <hr>
            <form method="post" novalidate="novalidate" enctype="multipart/form-data">
    
            <div class="form-group">
            <label class="control-label mb-1">Title</label>
            <input name="title" type="text" class="form-control" autocomplete='off'>
            </div>
    
            <div class="form-group">
            <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
            <input name="title_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
            </div>
    
            <div class="form-group">
            <label class="control-label mb-1" >Rating</label>
            <input name="rating" type="number" min='1' max='5' class="form-control" autocomplete='off' >
            </div>

            <div class="form-group">
            <label class="control-label mb-1" >Price</label>
            <input name="price" type="number" class="form-control" autocomplete='off' >
            </div>

            <div class="form-group">
            <label class="control-label mb-1" >Description</label>
            <textarea class="form-control cc-name valid" name="desc" autocomplete='off'></textarea>
            </div>
           
            <div class="form-group">
            <label class="control-label mb-1" style='direction:rtl ; float :right' >الوصف</label>
            <textarea class="form-control cc-name valid" name="desc_ar" autocomplete='off' style='direction:rtl ;'></textarea>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                <label for="file-input" class=" form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                <input type="file" name="photo" class="form-control-file">
                </div>
            </div> 

            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">Select Perfume Category</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="sub_cat" id="select" class="form-control">
                <option selected disabled>Please select a sub Category</option>
                <?php
                include 'connection.php';
                $q="SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id` = 1";
                $res = mysqli_query($conn , $q);
                while($row = mysqli_fetch_assoc($res)){
                    echo "<option value=".$row['sub_cat_id'].">".$row['sub_cat_title']."</option>";
                }
                ?>
                </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">Select Mix</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="mix_name" id="select" class="form-control">
                <option selected disabled>Please select a mix</option>
                <?php
                include 'connection.php';
                $q = "SELECT * FROM `ingredients_mix`";
                $res = mysqli_query($conn , $q);
                while($row = mysqli_fetch_assoc($res)){
                    echo "<option value=".$row['ingredients_mix_id'].">".$row['ingredients_mix_name']."</option>";
                }
                ?>
                </select>
                </div>
            </div>
            
            <div>
            <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
            <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
            </div>
            </form>
            <?php
            include 'connection.php';
            if(isset($_POST['upload'])){
                $name = $_FILES['photo']['name'];
                $title=$_POST['title'];
                $title_ar=$_POST['title_ar'];
                $rating = $_POST['rating'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];
                $desc_ar = $_POST['desc_ar'];
                $sub_cat = $_POST['sub_cat'];
                $mix_name = $_POST['mix_name'];
                $dir = "products/";
                $target_files = $dir .basename($_FILES['photo']['name']);
                $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
                $ex_array = array("jpg" , "jpeg" , "png");
                if(in_array($imageFileType , $ex_array)){
                    $qq = "SELECT * FROM `sub_cat` WHERE `sub_cat_id` = '{$sub_cat}'";
                    $ress = mysqli_query($conn , $qq);
                    $roww = mysqli_fetch_assoc($ress);
                    $s_title = $roww['sub_cat_title'];
                    $q = "INSERT INTO `product`(`product_title`, `product_title_ar`, `product_price`, `product_image`, `product_rating`, `product_description`, `product_description_ar`, `product_sub_cat_id`, `product_mix` , `pro_sub_title`) 
                    VALUES ('{$title}' , '{$title_ar}' , '{$price}' , '{$name}' , '{$rating}' , '{$desc}' , '{$desc_ar}' , '{$sub_cat}' , '{$mix_name}' , '{$s_title}')";
                    $res = mysqli_query($conn , $q) or die("Error!!");
                    move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
                }
            }
            ?>
            </div>
        </div>
       
        <div style='height:20px'></div> 
        </div>
        </div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function about(){
?>
<div class="main-content">
    <div class="section__content section__content--p30">
    <u><h1>About Us</h1></u>
    <br>
    <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">About</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        <div class="row form-group">
        <div class="col col-md-3">
        <label for="file-input" class=" form-control-label">Poster Image</label>
        </div>
        <div class="col-12 col-md-9">
        <input type="file" name="photo_poster" class="form-control-file">
        </div>
        </div>  

        <div class="form-group">
        <label class="control-label mb-1">About</label>
        <textarea class="form-control cc-name valid" name="about_about" autocomplete='off'></textarea>
        </div>

        <div class="form-group">
        <label class="control-label mb-1" style='direction:rtl ; float :right'>عن</label>
        <textarea class="form-control cc-name valid" name="about_about_ar" autocomplete='off' style='direction:rtl ;'></textarea>
        </div>

        <div class="form-group">
        <label class="control-label mb-1">About Attention</label>
        <textarea class="form-control cc-name valid" name="about_attention" autocomplete='off'></textarea>
        </div>

        <div class="form-group">
        <label class="control-label mb-1" style='direction:rtl ; float :right'> انتباه عن</label>
        <textarea class="form-control cc-name valid" name="about_attention_ar" autocomplete='off' style='direction:rtl ;'></textarea>
        </div>

        <div class="row form-group">
        <div class="col col-md-3">
        <label for="file-input" class=" form-control-label">First Image</label>
        </div>
        <div class="col-12 col-md-9">
        <input type="file" name="photo_one" class="form-control-file">
        </div>
        </div>
        
        <div class="row form-group">
        <div class="col col-md-3">
        <label for="file-input" class=" form-control-label">Second Image</label>
        </div>
        <div class="col-12 col-md-9">
        <input type="file" name="photo_two" class="form-control-file">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label mb-1">About Image</label>
        <textarea class="form-control cc-name valid" name="about_image" autocomplete='off'></textarea>
        </div>

        <div class="form-group">
        <label class="control-label mb-1" style='direction:rtl ; float :right'>عن</label>
        <textarea class="form-control cc-name valid" name="about_image_ar" autocomplete='off' style='direction:rtl ;'></textarea>
        </div>

        <div>
        <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </button>
        </div>
        </form>
        <?php
        include 'connection.php';
        if(isset($_POST['upload'])){
            $poster = $_FILES['photo_poster']['name'];
            $image1 = $_FILES['photo_one']['name'];
            $image2 = $_FILES['photo_two']['name'];
            $about_about = $_POST['about_about'];
            $about_about_ar = $_POST['about_about_ar'];
            $about_attention = $_POST['about_attention'];
            $about_attention_ar = $_POST['about_attention_ar'];
            $about_image = $_POST['about_image'];
            $about_image_ar = $_POST['about_image_ar'];
            $dir = "about/";
            $target_files1 = $dir .basename($_FILES['photo_poster']['name']);
            $target_files2 = $dir .basename($_FILES['photo_one']['name']);
            $target_files3 = $dir .basename($_FILES['photo_two']['name']);
            $imageFileType1 = strtolower(pathinfo($target_files1 , PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_files2 , PATHINFO_EXTENSION));
            $imageFileType3 = strtolower(pathinfo($target_files3 , PATHINFO_EXTENSION));
            $ex_array = array("jpg" , "jpeg" , "png");
            if(in_array($imageFileType1 , $ex_array) && in_array($imageFileType2 , $ex_array) && in_array($imageFileType3 , $ex_array)){
                $q = "INSERT INTO `about`(`about_poster`, `about_about`, `about_about_ar`, `about_about_attention`, `about_about_attention_ar`, `about_first_image`, `about_second_image`, `about_image`, `about_image_ar`) 
                VALUES ('{$poster}','{$about_about}','{$about_about_ar}','{$about_attention}','{$about_attention_ar}','{$image1}','{$image2}','{$about_image}','{$about_image_ar}')";
                $res = mysqli_query($conn , $q) or die("Error!!");
                move_uploaded_file($_FILES['photo_poster']['tmp_name'] , $dir.$poster);
                move_uploaded_file($_FILES['photo_one']['tmp_name'] , $dir.$image1);
                move_uploaded_file($_FILES['photo_two']['tmp_name'] , $dir.$image2);
            }
        }
        ?>
        </div>
    </div>
    <div style='height:20px'></div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function gallery(){
?>    
<div class="main-content">
    <div class="section__content section__content--p30">
    <u><h1>Gallery</h1></u>
    <br>
    <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">Add Picture</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate" enctype="multipart/form-data">   
        <br>     
        <div class="row form-group">
        <div class="col col-md-3">
        <label for="file-input" class=" form-control-label">Image</label>
        </div>
        <div class="col-12 col-md-9">
        <input type="file" name="photo" class="form-control-file">
        </div>
        </div>                
        <div>
        <br>
        <input type="submit" name="add_gallery" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </div>
        </form>
        <?php
        include 'connection.php';
        if(isset($_POST['add_gallery'])){
            $name = $_FILES['photo']['name'];
            $dir = "gallery/";
            $target_files = $dir .basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
            $ex_array = array("jpg" , "jpeg" , "png");
            if(in_array($imageFileType , $ex_array)){
                $q = "INSERT INTO `gallery`(`gallery_image`) VALUES ('{$name}')";
                $res = mysqli_query($conn , $q) or die("Error!!");
                move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
            }
        }
        ?>
        </div>
    </div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function map(){
?>
<div class="main-content">
        <div class="section__content section__content--p30">
        <u><h1>Map</h1></u>
        <br>
    
        <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">New Map Location</h3>
            </div>
            <hr>
            <form method="post" novalidate="novalidate" enctype="multipart/form-data">
    
            <div class="form-group">
            <label class="control-label mb-1">Title</label>
            <input name="title" type="text" class="form-control" autocomplete='off'>
            </div>

            <div class="form-group">
            <label class="control-label mb-1">Latitude</label>
            <input name="lat" type="text" class="form-control" autocomplete='off'>
            </div>

            <div class="form-group">
            <label class="control-label mb-1">Longitude</label>
            <input name="long" type="text" class="form-control" autocomplete='off'>
            </div>
    
            <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
            <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
            </div>
            </form>
            <?php
            include 'connection.php';
            if(isset($_POST['upload'])){
                $title=$_POST['title'];
                $lat=$_POST['lat'];
                $long=$_POST['long'];

                $q = "INSERT INTO `location`(`location_title`, `location_lat`, `location_lng`) 
                      VALUES ('{$title}' , '{$lat}' , '{$long}')";
                $res = mysqli_query($conn , $q) or die("Error!!");
            }
            ?>
            </div>
        </div>
       
        <div style='height:20px'></div> 
        </div>
        </div>

<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function mix_mix(){
?>
<div class="main-content">
    <div class="section__content section__content--p30">
    <u><h1>Mix</h1></u>
    <br>
    <div class="card">                               
        <div class="card-body">
        <div class="card-title">
        <h3 class="text-center title-2">Create New Mix</h3>
        </div>
        <hr>
        <form method="post" novalidate="novalidate" enctype="multipart/form-data">
 
        <div class="form-group">
        <label class="control-label mb-1">Mix Name</label>
        <input name="mix_name" type="text" class="form-control" autocomplete='off'>
        </div>
    
        <div>
        <input type="submit" name="mix_create" class="btn btn-lg btn-info btn-block btn-warning" value="Create">
        <span id="payment-button-sending" style="display:none;">Sending…</span>
        </button>
        </div>
        <?php
        include 'connection.php';
        if(isset($_POST['mix_create'])){
            $mix_name = $_POST['mix_name'];
            $q = "INSERT INTO `ingredients_mix`(`ingredients_mix_name`) 
                  VALUES ('{$mix_name}')";
            $res = mysqli_query($conn , $q);
        }
        ?>
        </form>
        </div>
    </div>
    <div style='height:20px'></div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function mix_ing(){
?>
<div class="main-content">
        <div class="section__content section__content--p30">
        <u><h1>Ingredients</h1></u>
        <br>
        <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">New Ingredient</h3>
            </div>
            <hr>
            <form method="post" novalidate="novalidate" enctype="multipart/form-data">
     
            <div class="form-group">
            <label class="control-label mb-1">Title</label>
            <input name="ing_title" type="text" class="form-control" autocomplete='off'>
            </div>
    
            <div class="form-group">
            <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
            <input name="ing_title_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
            </div>

            <div class="row form-group">
            <div class="col col-md-3">
            <label for="file-input" class=" form-control-label">Image</label>
            </div>
            <div class="col-12 col-md-9">
            <input type="file" name="photo" class="form-control-file">
            </div>
            </div> 
        
            <div class="form-group">
            <label class="control-label mb-1" >Description</label>
            <textarea class="form-control cc-name valid" name="ing_desc" autocomplete='off'></textarea>
            </div>
           
            <div class="form-group">
            <label class="control-label mb-1" style='direction:rtl ; float :right' >الوصف</label>
            <textarea class="form-control cc-name valid" name="ing_desc_ar" autocomplete='off' style='direction:rtl ;'></textarea>
            </div>

            <div>
            <input type="submit" name="new_ing" class="btn btn-lg btn-info btn-block btn-warning" value="Create">
            <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
            </div>
            <?php
            include 'connection.php';
            if(isset($_POST['new_ing'])){
                $name = $_FILES['photo']['name'];
                $ing_title = $_POST['ing_title'];
                $ing_title_ar = $_POST['ing_title_ar'];
                $ing_desc = $_POST['ing_desc'];
                $ing_desc_ar = $_POST['ing_desc_ar'];
                $dir = "ingredients/";
                $target_files = $dir .basename($_FILES['photo']['name']);
                $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
                $ex_array = array("jpg" , "jpeg" , "png");
                if(in_array($imageFileType , $ex_array)){
                    $q = "INSERT INTO `ingredient`(`ingredient_name`, `ingredient_name_ar`, `ingredient_image`, `ingredient_desc`, `ingredient_desc_ar`) 
                          VALUES ('{$ing_title}' , '{$ing_title_ar}' , '{$name}' , '{$ing_desc}' , '{$ing_desc_ar}')";
                    $res = mysqli_query($conn , $q) or die("Error!!");
                    move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
                }
            }
            ?>
            </form>
            </div>
        </div>
        <div style='height:20px'></div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function mix_assign(){
?>
<div class="main-content">
 <div class="section__content section__content--p30">
 <u><h1>Mix Assign</h1></u>
 <br>
 <div class="card">                               
                <div class="card-body">
                <div class="card-title">
                <h3 class="text-center title-2">Assign</h3>
                </div>
                <hr>
                <form method="post" novalidate="novalidate" enctype="multipart/form-data">

                <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">Select Mix</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="mix_name" id="select" class="form-control">
                <option selected disabled>Please select a mix</option>
                <?php
                include 'connection.php';
                $q = "SELECT * FROM `ingredients_mix`";
                $res = mysqli_query($conn , $q);
                while($row = mysqli_fetch_assoc($res)){
                    echo "<option value=".$row['ingredients_mix_id'].">".$row['ingredients_mix_name']."</option>";
                }
                ?>
                </select>
                </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                    <label class=" form-control-label">Ingredients</label>
                    </div>
                    <div class="col col-md-9">
                    <div class="form-check-inline form-check">
                    <?php
                    include 'connection.php';
                    $qq= "SELECT * FROM `ingredient`";
                    $ress = mysqli_query($conn , $qq);
                    while($roww = mysqli_fetch_assoc($ress)){
                        echo '<label for="inline-checkbox1" class="form-check-label" style="margin-right:10px">';
                        echo '<input type="checkbox" name="ings[]" value="'.$roww['ingredient_id'].'" class="form-check-input">'.$roww['ingredient_name'];
                        echo '</label>';
                    }
                    ?>
                    </div>
                    </div>
                </div>
    
                <div>
                <input type="submit" name="new_ing" class="btn btn-lg btn-info btn-block btn-warning" value="Create">
                <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
                </div>
                <?php
                include 'connection.php';
                if(isset($_POST['new_ing'])){
                    if(!empty($_POST['ings'])){
                        foreach($_POST['ings'] as $ing){
                            $mix = $_POST['mix_name'];
                            // $ings = $_POST['ings'];
                            $qqq = "INSERT INTO `mix_contains`(`mix_id`, `ing_id`) 
                                    VALUES ('{$mix}' , '{$ing}')";
                            $resss = mysqli_query($conn , $qqq);
                        }
                    }
                    
                }
                ?>
                </form>
                </div>
 </div>
 <div style='height:20px'></div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function soap(){
?>
<div class="main-content">
            <div class="section__content section__content--p30">
            <u><h1>Soap</h1></u>
            <br>
        
            <div class="card">                               
                <div class="card-body">
                <div class="card-title">
                <h3 class="text-center title-2">New Product</h3>
                </div>
                <hr>
                <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        
                <div class="form-group">
                <label class="control-label mb-1">Title</label>
                <input name="title" type="text" class="form-control" autocomplete='off'>
                </div>
        
                <div class="form-group">
                <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
                <input name="title_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
                </div>
        
                <div class="form-group">
                <label class="control-label mb-1" >Rating</label>
                <input name="rating" type="number" min='1' max='5' class="form-control" autocomplete='off' >
                </div>
    
                <div class="form-group">
                <label class="control-label mb-1" >Price</label>
                <input name="price" type="number" class="form-control" autocomplete='off' >
                </div>
    
                <div class="form-group">
                <label class="control-label mb-1" >Description</label>
                <textarea class="form-control cc-name valid" name="desc" autocomplete='off'></textarea>
                </div>
               
                <div class="form-group">
                <label class="control-label mb-1" style='direction:rtl ; float :right' >الوصف</label>
                <textarea class="form-control cc-name valid" name="desc_ar" autocomplete='off' style='direction:rtl ;'></textarea>
                </div>
    
                <div class="row form-group">
                    <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <input type="file" name="photo" class="form-control-file">
                    </div>
                </div> 
    
                <div class="row form-group">
                    <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Select Soap Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select name="sub_cat" id="select" class="form-control">
                    <option selected disabled>Please select a sub Category</option>
                    <?php
                    include 'connection.php';
                    $q="SELECT * FROM `sub_cat` WHERE `sub_cat_cat_id` = 2";
                    $res = mysqli_query($conn , $q);
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<option value=".$row['sub_cat_id'].">".$row['sub_cat_title']."</option>";
                    }
                    ?>
                    </select>
                    </div>
                </div>
    
                <div class="row form-group">
                    <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Select Mix</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select name="mix_name" id="select" class="form-control">
                    <option selected disabled>Please select a mix</option>
                    <?php
                    include 'connection.php';
                    $q = "SELECT * FROM `ingredients_mix`";
                    $res = mysqli_query($conn , $q);
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<option value=".$row['ingredients_mix_id'].">".$row['ingredients_mix_name']."</option>";
                    }
                    ?>
                    </select>
                    </div>
                </div>
                
                <div>
                <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
                </div>
                </form>
                <?php
                include 'connection.php';
                if(isset($_POST['upload'])){
                    $name = $_FILES['photo']['name'];
                    $title=$_POST['title'];
                    $title_ar=$_POST['title_ar'];
                    $rating = $_POST['rating'];
                    $price = $_POST['price'];
                    $desc = $_POST['desc'];
                    $desc_ar = $_POST['desc_ar'];
                    $sub_cat = $_POST['sub_cat'];
                    $mix_name = $_POST['mix_name'];
                    $dir = "products/";
                    $target_files = $dir .basename($_FILES['photo']['name']);
                    $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
                    $ex_array = array("jpg" , "jpeg" , "png");
                    if(in_array($imageFileType , $ex_array)){
                        $qq = "SELECT * FROM `sub_cat` WHERE `sub_cat_id` = '{$sub_cat}'";
                        $ress = mysqli_query($conn , $qq);
                        $roww = mysqli_fetch_assoc($ress);
                        $s_title = $roww['sub_cat_title'];
                        $q = "INSERT INTO `product`(`product_title`, `product_title_ar`, `product_price`, `product_image`, `product_rating`, `product_description`, `product_description_ar`, `product_sub_cat_id`, `product_mix` , `pro_sub_title`) 
                        VALUES ('{$title}' , '{$title_ar}' , '{$price}' , '{$name}' , '{$rating}' , '{$desc}' , '{$desc_ar}' , '{$sub_cat}' , '{$mix_name}' , '{$s_title}')";
                        $res = mysqli_query($conn , $q) or die("Error!!");
                        move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
                    }
                }
                ?>
                </div>
            </div>
           
            <div style='height:20px'></div> 
            </div>
            </div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function new_category(){
?>
<div class="main-content">
     <div class="section__content section__content--p30">
     <u><h1>Category</h1></u>
     <br>
     <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">New Sub-Category</h3>
            </div>
            <hr>
            <form method="post" novalidate="novalidate" enctype="multipart/form-data">

            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">Select a category</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="cat_name" id="select" class="form-control">
                <option selected disabled>Please select a category</option>
                <?php
                include 'connection.php';
                $q = "SELECT * FROM `category`";
                $res = mysqli_query($conn , $q);
                while($row = mysqli_fetch_assoc($res)){
                    echo "<option value=".$row['category_id'].">".$row['category_name']."</option>";
                }
                ?>
                </select>
                </div>
                </div>
     
            <div class="form-group">
            <label class="control-label mb-1">Title</label>
            <input name="sub_cat_name" type="text" class="form-control" autocomplete='off'>
            </div>

            <div class="form-group">
            <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
            <input name="sub_cat_name_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
            </div>
    
            <div>
            <input type="submit" name="new_sub_cat" class="btn btn-lg btn-info btn-block btn-warning" value="Create">
            <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
            </div>
            <?php
            include 'connection.php';
            if(isset($_POST['new_sub_cat'])){
                $sub_cat_name = $_POST['sub_cat_name'];
                $sub_cat_name_ar = $_POST['sub_cat_name_ar'];
                $cat_name = $_POST['cat_name'];
                $q = "INSERT INTO `sub_cat`(`sub_cat_cat_id`, `sub_cat_title`, `sub_cat_title_ar`) 
                      VALUES ('{$cat_name}' , '{$sub_cat_name}' , '{$sub_cat_name_ar}')";
                $res = mysqli_query($conn , $q);
            }
            ?>
            </form>
            </div>
        </div>
     <div style='height:20px'></div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function contact_us(){
?>
<div class="main-content">
            <div class="section__content section__content--p30">
            <u><h1>Contact Us</h1></u>
            <br>
        
            <div class="card">                               
                <div class="card-body">
                <div class="card-title">
                <h3 class="text-center title-2">New Address</h3>
                </div>
                <hr>
                <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        
                <div class="form-group">
                <label class="control-label mb-1">Title</label>
                <input name="address" type="text" class="form-control" autocomplete='off'>
                </div>
        
                <div class="form-group">
                <label class="control-label mb-1" style='direction:rtl ; float :right'>العنوان</label>
                <input name="address_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl ;'>
                </div>

                <div class="form-group">
                <label class="control-label mb-1">Number</label>
                <input name="number" type="number" class="form-control" autocomplete='off'>
                </div>
                
                <div>
                <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
                </div>
                </form>
                <?php
                include 'connection.php';
                if(isset($_POST['upload'])){
                    $address=$_POST['address'];
                    $address_ar=$_POST['address_ar'];
                    $number=$_POST['number'];
                    $q = "INSERT INTO `contact`(`contact_address`, `contact_address_ar`, `contact_number`) 
                          VALUES ('{$address}' , '{$address_ar}' , '{$number}')";
                    $res = mysqli_query($conn , $q);
                }
                ?>
                </div>
            </div>

            <div class="card">                               
                <div class="card-body">
                <div class="card-title">
                <h3 class="text-center title-2">New Phone Number</h3>
                </div>
                <hr>
                <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        
                <div class="form-group">
                <label class="control-label mb-1">Phone Number</label>
                <input name="phone_number" type="number" class="form-control" autocomplete='off'>
                </div>
                
                <div>
                <input type="submit" name="upload_number" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
                </div>
                </form>
                <?php
                include 'connection.php';
                if(isset($_POST['upload_number'])){
                    $phone_number=$_POST['phone_number'];
                    $q = "INSERT INTO `phone`(`phone_number`) VALUES ('{$phone_number}')";
                    $res = mysqli_query($conn , $q);
                }
                ?>
                </div>
            </div>
           
            <div style='height:20px'></div> 
            </div>
            </div>
</div>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function footer_info(){
?>
<div class="main-content">
            <div class="section__content section__content--p30">
            <u><h1>Footer</h1></u>
            <br>
        
            <div class="card">                               
                <div class="card-body">
                <div class="card-title">
                <h3 class="text-center title-2">About Us</h3>
                </div>
                <hr>
                <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        
                <div class="form-group">
                <label class="control-label mb-1">Description</label>
                <textarea name="desc" type="text" class="form-control" autocomplete='off'></textarea>
                </div>
        
                <div class="form-group">
                <label class="control-label mb-1" style='direction:rtl ; float :right'>الوصف</label>
                <textarea name="desc_ar" type="text" class="form-control" autocomplete='off' style='direction:rtl'></textarea>
                </div>
                
                <div>
                <input type="submit" name="upload" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
                </div>
                </form>
                <?php
                include 'connection.php';
                if(isset($_POST['upload'])){
                    $desc=$_POST['desc'];
                    $desc_ar=$_POST['desc_ar'];
                    $q = "INSERT INTO `footer` (`footer_about` , `footer_about_ar`) VALUES ('{$desc}' , '{}$desc_ar')";
                    $res = mysqli_query($conn , $q);
                }
                ?>
                </div>
            </div>

            <div class="card">                               
                <div class="card-body">
                <div class="card-title">
                <h3 class="text-center title-2">social Media</h3>
                </div>
                <hr>
                <form method="post" novalidate="novalidate" enctype="multipart/form-data">
        
                <div class="form-group">
                <label class="control-label mb-1">Title</label>
                <input name="title" type="text" class="form-control" autocomplete='off'>
                </div>

                <div class="form-group">
                <label class="control-label mb-1">Link</label>
                <input name="link" type="text" class="form-control" autocomplete='off'>
                </div>
                
                <div>
                <input type="submit" name="upload_social" class="btn btn-lg btn-info btn-block btn-warning" value="Add">
                <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
                </div>
                </form>
                <?php
                include 'connection.php';
                if(isset($_POST['upload_social'])){
                    $title=strtolower($_POST['title']);
                    $link=$_POST['link'];
                    $q = "INSERT INTO `social`(`social_title`, `social_link`) VALUES ('{$title}' , '{$link}')";
                    $res = mysqli_query($conn , $q);
                }
                ?>
                </div>
            </div>
           
            <div style='height:20px'></div> 
            </div>
            </div>
</div>
<?php
}
?>