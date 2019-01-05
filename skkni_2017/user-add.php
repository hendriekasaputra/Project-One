<?php 
session_start();

if (!isset($_SESSION["nama"])) {
    header("location:login.php");
}
elseif ($_SESSION['type'] !=0) {
    header("location:login.php");
}   

include 'conf/koneksi.php';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SI SKKNI ROHUL 2017</title>
        <script type="text/javascript" src="assets/js/vendor/jquery/jquery-1.11.2.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#tarif,#ho,#reklame').keyup(function(){
            
            var tarif=parseInt($('#tarif').val());
            var ho=parseInt($('#ho').val());
            var reklame=parseInt($('#reklame').val());
 
            
            var total_jumlah=tarif+ho+reklame;
            $('#jumlah').val(total_jumlah);
            });
        });
        </script>
        <link rel="icon" type="image/ico" href="assets/images/favicon.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animate.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="assets/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="assets/js/vendor/summernote/summernote.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">






            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="menus-admin.php">
                            <span><strong>SI</strong> SKKNI ROHUL</span>
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->


                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                        
                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/admin.png" alt="" class="img-circle size-30x30">
                                <span>Hendri Eka Saptra <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0">
                                        <span class="badge bg-greensea pull-right"></span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>

                                <li>
                                    <a role="button" tabindex="0" href="log-out.php">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>

                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li class="active"><a href="menus-admin.php"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
                                        
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Input</span></a>
                                                <ul>
                                                    <li><a href="new-input-data.php"><i class="fa fa-caret-right"></i> Input Data SKKNI</a></li>                         
                                                </ul>
                                                <!--
                                                <ul>
                                                    <li><a href="input-data-datang.php"><i class="fa fa-caret-right"></i> Input Data Pendatang</a></li>                       
                                                </ul>
                                                <ul>
                                                    <li><a href="input-data-pindah.php"><i class="fa fa-caret-right"></i> Input Data Pindah</a></li>                      
                                                </ul>
                                                <ul>
                                                    <li><a href="input-data-kelahiran.php"><i class="fa fa-caret-right"></i> Input Data Kelahiran</a></li>            
                                                </ul>
                                                <ul>
                                                    <li><a href="input-data-kematian.php"><i class="fa fa-caret-right"></i> Input Data Kematian</a></li>            
                                                </ul>
                                                -->
                                            </li>

                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Data</span></a>
                                                <ul>
                                                    <li><a href="list-data.php"><i class="fa fa-caret-right"></i> List Data SKKNI</a></li>
                                                </ul>
                                                <!--
                                                <ul>
                                                    <li><a href="data-datang.php"><i class="fa fa-caret-right"></i> Data Penduduk Pendatang</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="data-pindah.php"><i class="fa fa-caret-right"></i> Data Penduduk Pindah</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="data-kelahiran.php"><i class="fa fa-caret-right"></i> Data Kelahiran Penduduk</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="data-kematian.php"><i class="fa fa-caret-right"></i> Data Kematian Penduduk</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>User</span></a>
                                                <ul>
                                                    <li><a href="user-add.php"><i class="fa fa-caret-right"></i> Add User</a></li>
                                                    <li><a href="change-password.php"><i class="fa fa-caret-right"></i> Change Password</a></li>                                                    
                                                 </ul>
                                            </li>
                                                                                      

                                        </ul>
                                        <!--/ NAVIGATION Content -->


                                    </div>
                                </div>
                            </div>
                            

                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->

\



            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-forms-common">

                    <div class="pageheader">

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Beranda</a>
                                </li>
                                <li>
                                    <a href="#">User</a>
                                </li>
                                <li>
                                    <a href="user-add.php">Add User</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Form</strong> Elements</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">


                                    <form method="POST" class="form-horizontal" name="form1" role="form" id="form1" action="user-add-proses.php"
                                    data-parsley-validate>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control" placeholder="Username"
                                                       data-parsley-trigger="change" 
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="pass" class="form-control" placeholder="Password"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>                                      

                                        <hr class="line-dashed line-full" />

                                 <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                    <button type="submit" class="btn btn-success" id="form1Submit" >Tambah</button>
                                    <button type="reset" class="btn btn-danger"> Reset</button>
                                </div>
                                    <!-- END SUBMIT BUTTON -->
                                    </form>

                                </div>
                                <!-- /tile body -->
                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->


<div class="tile-widget bg-greensea">
                                "Copyright © 2017"
                                <a href="www.github.com/hendriekasaputra">Hendri Eka Saputra</a>
                                 All rights reserved.
                                </div>  

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/slider/bootstrap-slider.min.js"></script>

        <script src="assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <script src="assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <script src="assets/js/vendor/daterangepicker/moment.min.js"></script>

        <script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>

        <script src="assets/js/vendor/summernote/summernote.min.js"></script>

          <script src="assets/js/vendor/parsley/parsley.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                $('#ex1').slider({
                    formatter: function(value) {
                        return 'Current value: ' + value;
                    }
                });
                $("#ex1").on("slide", function(slideEvt) {
                    $("#ex1SliderVal").text(slideEvt.value);
                });

                $("#ex2, #ex3, #ex4, #ex5").slider();

                //load wysiwyg editor
                $('#summernote').summernote({
                    height: 200   //set editable area's height
                });
                //*load wysiwyg editor
            });
        </script>
        <!--/ Page Specific Scripts -->







        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html>
