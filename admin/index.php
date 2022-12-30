﻿<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli("localhost","root","","pamara");

if (!isset($_SESSION['admin']) OR empty($_SESSION["admin"]) )
{
    echo "<script>alert('login dulu sayan');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../img/pam.png">
  <title>Admin | PAM Maranatha Polimak</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                

                <a class="navbar-brand" href="index.html">Admin PAM</a> 

            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> &nbsp; <a href="index.php?halaman=logout" class="fa fa-sign-out btn btn-danger square-btn-adjust"> Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>


                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="index.php?halaman=about"><i class="fa fa-bookmark"></i> Information</a></li>
                    <li><a href="index.php?halaman=gallery"><i class="fa fa-picture-o"></i> Gallery</a></li>
                    <li><a href="index.php?halaman=contact"><i class="fa fa-phone"></i> Contact</a></li>


                </ul>

            </div>

        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 

                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="about") 
                    {
                        include 'about.php';
                    }
                    elseif ($_GET['halaman']=="tambahabout")
                    {
                        include 'tambahabout.php';
                    }
                    elseif ($_GET['halaman']=="hapusabout")
                    {
                        include 'hapusabout.php';
                    }
                    elseif ($_GET['halaman']=="gallery") 
                    {
                     include 'gallery.php';
                 }
                 elseif ($_GET['halaman']=="contact")
                     { include 'contact.php';
             }
             elseif ($_GET['halaman']=="tambahgallery")
             {
                include 'tambahgallery.php';
            }
            elseif ($_GET['halaman']=="hapusgallery")
            {
                include 'hapusgallery.php';
            }
            elseif ($_GET['halaman']=="logout")
            {
                include 'logout.php';
            }
        }
        else
        {
            include 'home.php';
        }

        ?>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
