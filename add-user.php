<?php
require './class/atclass.php';
$msg = "";

if ($_POST) {
    $user_name = $_POST['user_name'];
    $user_gender = $_POST['user_gender'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_address = $_POST['user_address'];
    $user_mobileno = $_POST['user_mobileno'];

    $query = mysqli_query($connection, "insert into tbl_user (user_name,user_gender,user_email,user_password,user_address,user_mobileno) values('{$user_name}','{$user_gender}','{$user_email}','{$user_password}','{$user_address}','{$user_mobileno}')") or die(mysqli_error($connection));

    if ($query) {
        $msg = '<div class="alert alert-success" role="alert">
          Record Added
          </div>';
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS -->

        <!-- side nav css file -->
        <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
        <!-- side nav css file -->

        <!-- js-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->

    </head> 
    <body class="cbp-spmenu-push">
        <div class="main-content">

            <!--left-fixed -navigation-->
            <?php
            include'./theampart/sidebar.php';
            ?>
            <!-- header-starts -->
            <?php
            include './theampart/header-menu.php';
            ?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms">
                        <h2 class="title1">User Form</h2>
                        <?php
                        echo $msg;
                        ?>
                        <div class=" form-grids row form-grids-right">
                            <div class="widget-shadow " data-example-id="basic-forms">
                                <div class="form-title">
                                    <h4>User Details :</h4>
                                </div>
                                <div class="form-body">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data"> 
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label"> Name </label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" class="form-control" id="inputname" name="user_name" placeholder="Enter Name" required> 
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="radio" class="col-sm-2 control-label"> Gender </label>
                                            <div class="col-sm-8">
                                                <div class="radio"><label><input type="radio" value="male"> Male </label></div>
                                                <div class="radio"><label><input type="radio" value="female"> Female </label></div>
                                   
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" class="form-control" id="inputEmail3" name="user_email" placeholder="Enter Email" required> 
                                            </div>
                                        </div>
                                        <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Password</label> 
                                            <div class="col-sm-9"> <input type="password" class="form-control" id="inputPassword3" name="user_password" placeholder="Enter Password" required>
                                            </div>
                                        </div> 
                                        <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Address</label> 
                                            <div class="col-sm-9"> <input type="text" class="form-control" id="inputPassword3" name="user_address" placeholder="Enter Address" required>
                                            </div>
                                        </div> 
                                        <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Mobileno</label> 
                                            <div class="col-sm-9"> <input type="number" class="form-control" id="inputPassword3" name="user_mobileno" placeholder="Enter Mobileno" required>
                                            </div>
                                        </div> 

                                        <div class="col-sm-offset-2">
                                            <button type="submit" class="btn btn-success"> Add </button> 
                                            <button type="reset" class="btn btn-danger">Reset</button> 
                                            <button type="button" onclick="window.location = 'display-user.php';" class="btn btn-info">View</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                        \
                    </div>
                </div>
            </div>
            <!--footer-->
            <?php
            include './theampart/footer.php';
            ?>
            <!--//footer-->
        </div>

        <!-- side nav js -->
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
                                                $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->

        <!-- Classie --><!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
                                                var menuLeft = document.getElementById('cbp-spmenu-s1'),
                                                        showLeftPush = document.getElementById('showLeftPush'),
                                                        body = document.body;

                                                showLeftPush.onclick = function () {
                                                    classie.toggle(this, 'active');
                                                    classie.toggle(body, 'cbp-spmenu-push-toright');
                                                    classie.toggle(menuLeft, 'cbp-spmenu-open');
                                                    disableOther('showLeftPush');
                                                };

                                                function disableOther(button) {
                                                    if (button !== 'showLeftPush') {
                                                        classie.toggle(showLeftPush, 'disabled');
                                                    }
                                                }
        </script>
        <!-- //Classie --><!-- //for toggle left push menu script -->

        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"></script>

    </body>
</html>