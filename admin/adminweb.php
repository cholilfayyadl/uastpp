<?php
ob_start();
session_start();
if(!isset($_SESSION['akun_username'])) header("location: signin.php");
include "../lib/config.php";
include "../lib/koneksi.php";

$queryEdit=mysqli_query($konek, "SELECT * FROM signup WHERE id_user=$_SESSION[akun_id]");

$hasilQuery=mysqli_fetch_array($queryEdit);

$gambar=$hasilQuery['gambar'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.6.95/css/materialdesignicons.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/ecom/asset/images/logo.png">
    <title>Dashboard | E-Sponsor</title>
    <!-- Bootstrap Core CSS -->
    <link href="/ecom/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="/ecom/asset/css/chartist.min.css" rel="stylesheet">
    <link href="/ecom/asset/css/chartist-init.css" rel="stylesheet">
    <link href="/ecom/asset/css/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="/ecom/asset/css/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/ecom/asset/css/style.css" rel="stylesheet">
    <link href="/ecom/asset/themify-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- You can change the theme colors from here -->
    <link href="/ecom/asset/css/blue.css" id="theme" rel="stylesheet">

    <!-- wysuhtml5 Plugin JavaScript -->



</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="adminweb.php?module=home">
                            <!-- Logo icon -->
                            <b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="/ecom/asset/images/logo.png" alt="E-Sponsor" class="dark-logo" style="margin-top:-10px !important; width:40px !important"/>
                                <!-- Light Logo icon -->
                                <img src="/ecom/asset/images/logo.png" alt="E-Sponsor" class="light-logo" style="margin-top:-10px !important; width:40px !important"/>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span style="color:#fff !important; margin-top:115px !important"> &nbsp  &nbsp<b><i>E - Sponsor</i></b></span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                                    <!-- ============================================================== -->
                                    <!-- Search -->
                                    <!-- ============================================================== -->
                                    
                                           
                                        <!-- ============================================================== -->
                                        <!-- End Messages -->
                                        <!-- ============================================================== -->
                                    </ul>



                           
                            </div>
                        </nav>
                    </header>
                    <!-- ============================================================== -->
                    <!-- End Topbar header -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left Sidebar - style you can find in sidebar.scss  -->
                    <!-- ============================================================== -->
                    <aside class="left-sidebar" style="font-size: 10px;">
                        <!-- Sidebar scroll-->
                        <div class="scroll-sidebar" >
                            <!-- User profile -->
                            <div class="user-profile" style="background: url(/ecom/asset/images/user-info.jpg) no-repeat;">
                                <!-- User profile image -->
                                <div class="profile-img"> 

                                    <?php
                                    if($gambar != null){
                                       echo " <img class='profile-pic' src='/ecom/admin/pengaturan/upload/$gambar'/>";
                                   }
                                   else {

                                    echo " <img class='profile-pic' src='/ecom/admin/pengaturan/upload/no-image.jpg'/>";
                                }
                                ?>




                            </div>
                            <!-- User profile text-->
                            <div class="profile-text" > <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="true" ><?php echo"$_SESSION[akun_username]"?></a>


                            </div>
                        </div>
                        <!-- End User profile text-->





                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="nav-small-cap">DASHBOARD</li>


                                <li <?php if($_GET['module'] == 'home'){ echo 'class="active"'; }else{ echo '';}?>> 
                                    <a href="adminweb.php?module=home"><i class="mdi mdi-gauge"></i><span class="hide-menu">Menu Utama </span></a>

                                </li>


                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-menu-alt"></i><span
                                    class="hide-menu">Kategori</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li <?php if($_GET['module'] == 'tambah_kategori'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=tambah_kategori">Tambah Kategori</a></li>
                                        <li <?php if($_GET['module'] == 'tambah_kategori'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=list_kategori">Daftar Kategori</a></li>

                                    </ul>
                                </li>




                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-pencil"></i><span
                                    class="hide-menu">Artikel</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li <?php if($_GET['module'] == 'tambah_artikel'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=tambah_artikel">Tambah Artikel</a></li>
                                        <li <?php if($_GET['module'] == 'tambah_artikel'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=list_artikel">Daftar Artikel</a></li>

                                    </ul>
                                </li>








                                <li class="nav-devider"></li>
                                <li class="nav-small-cap">PERSONAL</li>



                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-star"></i><span
                                    class="hide-menu">Testimoni</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li <?php if($_GET['module'] == 'tambah_testimonial'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=tambah_testimonial">Tambah Testimoni</a></li>
                                        <li <?php if($_GET['module'] == 'tambah_testimonial'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=list_testimonial">Daftar Testimoni</a></li>

                                    </ul>
                                </li>





                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-user"></i><span
                                    class="hide-menu">Pengaturan</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li <?php if($_GET['module'] == 'edit_akun'){ echo 'class="active"'; }else{ echo '';}?>><a href="adminweb.php?module=edit_akun&id_user=<?php echo"$_SESSION[akun_id]"?>">Ubah Data Akun</a></li>

                                    </ul>
                                </li>




                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                    <!-- Bottom points-->
                    <div class="sidebar-footer">
                        <!-- item--><a href="adminweb.php?module=edit_akun&id_user=<?php echo"$_SESSION[akun_id]"?>" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                        <!-- item--><a href="" class="link" data-toggle="tooltip"></a>
                        <!-- item--><a href="logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                    <!-- End Bottom points-->
                </aside>
                <!-- ============================================================== -->
                <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Page wrapper  -->
                <!-- ============================================================== -->
                <div class="page-wrapper">
                    <!-- ============================================================== -->
                    <!-- Container fluid  -->
                    <!-- ============================================================== -->

                    <div class="container-fluid">
                        <!-- ============================================================== -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->



                        <?php
                        if ($_GET['module'] == 'home'){
                          include "home/home.php";
                      } 

                                      //kategori
                      elseif ($_GET['module'] == 'list_kategori'){
                          include "kategori/list_kategori.php";
                      }elseif ($_GET['module'] == 'tambah_kategori'){
                          include "kategori/form_tambah.php";
                      }elseif ($_GET['module'] == 'edit_kategori'){
                          include "kategori/form_edit.php";
                      }

                                      //testimonial
                      elseif ($_GET['module'] == 'list_testimonial'){
                          include "testimonial/list_testimonial.php";
                      }elseif ($_GET['module'] == 'tambah_testimonial'){
                          include "testimonial/form_tambah.php";
                      }elseif ($_GET['module'] == 'edit_testimonial'){
                          include "testimonial/form_edit.php";
                      }

                                      //artikel
                      elseif ($_GET['module'] == 'list_artikel'){
                          include "artikel/list_artikel.php";
                      }elseif ($_GET['module'] == 'tambah_artikel'){
                          include "artikel/form_tambah.php";
                      }elseif ($_GET['module'] == 'edit_artikel'){
                          include "artikel/form_edit.php";
                      }

                                      //Edit akun
                      elseif ($_GET['module'] == 'edit_akun'){
                          include "pengaturan/form_edit.php";
                      }


                      ?>                              


                  </div>
                  <!-- ============================================================== -->
                  <!-- End Container fluid  -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- footer -->
                  <!-- ============================================================== -->
                  <footer class="footer">
                    © 2019 Material Pro Admin by wrappixel.com
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->


        <script src="/ecom/asset/js/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/ecom/asset/js/popper.min.js"></script>
        <script src="/ecom/asset/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="/ecom/asset/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="/ecom/asset/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/ecom/asset/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="/ecom/asset/js/sticky-kit.min.js"></script>
        <script src="/ecom/asset/js/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="/ecom/asset/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!-- chartist chart -->
        <script src="/ecom/asset/js/chartist.min.js"></script>
        <script src="/ecom/asset/js/chartist-plugin-tooltip.min.js"></script>
        <!--c3 JavaScript -->
        <script src="/ecom/asset/js/d3.min.js"></script>
        <script src="/ecom/asset/js/c3.min.js"></script>
        <!-- Chart JS -->
        <script src="/ecom/asset/js/dashboard1.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="/ecom/asset/js/jQuery.style.switcher.js"></script>



    </body>

    </html>