<?php
    include 'menu.php';
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="images/png" sizes="16x16" href="../../images/favicon.ico">
    <title>Com Service System</title>
    
    <!--------------------------------------------------------->
    <!-- stylepopup -->
    <link rel="stylesheet" href="../../style/w3.css">
    
    <!-- Date ok-->
    <link rel="stylesheet" href="../../date/build/css/bootstrap-datetimepicker.min.css">
    
    <!-- Custom Fonts -->
    <link href="../../date/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <!-- Custom CSS -->   
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/quill/dist/quill.snow.css">
  
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>   
    <![endif]-->
    
     
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->      
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../../dist/js/pages/mask/mask.init.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/libs/quill/dist/quill.min.js"></script>
    
    <!----------------------------------------------------------------------------------->
    <!-- Bootstrap Core JavaScript -->
    <script src="../../date/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>   
    <script src="../../date/js/moment-with-locales.js"></script>
    <script src="../../date/build/js/bootstrap-datetimepicker.min.js"></script>   

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
<div class="col-md-12 col-lg-12 col-xlg-2"> 
    <div class="card">    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <br>
         <header class="topbar" data-navbarbg="skin5">
                    <a class="navbar-brand" href="">
                        <span class="logo-text">
                            <img style="width: 50px" style="height: 50px" src="../../images/logo.png" alt="homepage" class="light-logo" />                           
                        </span>
                    </a>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-effect pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../images/user.png"  alt="user" class="rounded-circle" width="31"></a>               
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="#"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?menu=out"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>                                
                            </div>
                        </li>
                    </ul>
        </header>
        <br>
            <div class="container-fluid">             
                <div class="row">
                    <?php                
                           include $src_page;	
                    ?>                   
                </div>           
            </div>                      
        </div>
    </div>
</div>          
        <footer class="footer text-center">
            All Rights Reserved pHicha.Sign.On <a href="#">Link</a>.
        </footer>   
  
</body>
</html>