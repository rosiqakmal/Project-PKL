<?php
include"koneksi.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location: login.php");
}
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>SIMPKL-WGS</title>

  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="css/material.min.css" >
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/material-icon.css" rel="stylesheet">

  <!-- CSS DATA TABLE -->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" >

  <!-- <link rel="stylesheet" type="text/css" href="css/rowReorder.dataTables.min.css" > -->
  <link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/dataTables.material.min.css" > -->

  <!-- custom css -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="css/material.min.css" >
 
  <!--  JQUERY-->
  <script src="js/jquery-2.1.1.min.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/material-icon.css" rel="stylesheet">

  <!-- CSS CUSTOM  -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/

</head>
<body>
<div class="page-container">
   <!--/content-inner-->
  <div class="left-content">
     <div class="inner-content">
    <!-- header-starts -->
      <div class="header-section">
            <!--menu-right-->
            <div class="top_menu">
                    <div class="main-search">
                      <form>
                         <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
                        <input type="submit" value="">
                      </form>
                  <div class="close"><img src="images/cross.png" /></div>
                </div>
                  
                  <script type="text/javascript">
                     $('.main-search').hide();
                    $('button').click(function (){
                      $('.main-search').show();
                      $('.main-search text').focus();
                    }
                    );
                    $('.close').click(function(){
                      $('.main-search').hide();
                    });
                  </script>
              <!--/profile_details-->
                <div class="profile_details_left">
                  <ul class="nofitications-dropdown">
                      <li class="dropdown note dra-down">
                             
                                    <script type="text/javascript">
      
                                  function DropDown(el) {
                                    this.dd = el;
                                    this.placeholder = this.dd.children('span');
                                    this.opts = this.dd.find('ul.dropdown > li');
                                    this.val = '';
                                    this.index = -1;
                                    this.initEvents();
                                  }
                                  DropDown.prototype = {
                                    initEvents : function() {
                                      var obj = this;

                                      obj.dd.on('click', function(event){
                                        $(this).toggleClass('active');
                                        return false;
                                      });

                                      obj.opts.on('click',function(){
                                        var opt = $(this);
                                        obj.val = opt.text();
                                        obj.index = opt.index();
                                        obj.placeholder.text(obj.val);
                                      });
                                    },
                                    getValue : function() {
                                      return this.val;
                                    },
                                    getIndex : function() {
                                      return this.index;
                                    }
                                  }

                                  $(function() {

                                    var dd = new DropDown( $('#dd') );

                                    $(document).click(function() {
                                      // all dropdowns
                                      $('.wrapper-dropdown-3').removeClass('active');
                                    });

                                  });

                                </script>
                                            <div class="clearfix"></div>  
                </ul>
              </div>
              <div class="clearfix"></div>  
              <!--//profile_details-->
            </div>
            <!--//menu-right-->
          <div class="clearfix"></div>
        </div>
          <!-- //header-ends -->
            <div class="outter-wp">
                <!--custom-widgets-->

<div class="jumbotron" style="margin-top:50px">
      <div class="row">
      <div class="col-md-5">
     <img src="images/tut-wuri.png" style="width:400px;height:400px;">   
    </div>
      <div class="col-md-6" style="margin-top: 50px;">
        <h2><b>Selamat datang di Halaman ADMIN</b></h2>
        <p>Disini anda bisa memanegeman data SMK <b>mencari data</b>, <b>menambahkan data</b>, <b>mengedit data</b>dan <b>menghapus data</b></p>
      </div>
    </div>
    </div>

          <!--/sidebar-menu-->
        <div class="sidebar-menu">
          <header class="logo">
          <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> 
          <h1>Admin</h1></span> 
          <!--<img id="logo" src="" alt="Logo"/>--> 
          </a> 
        </header>
      <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
      <!--/down-->
              <div class="down">  
                    <a href="index.html"><img src="images/admin.jpg" style="width: 126px;" ></a>
                    <a href="index.html"><span class=" name-caret">Roshiq Akmal</span></a>
                   <p>System Administrator in Company</p>
                  <ul>
                  <li><a class="tooltips" href="index.html"><span>Profile</span><i class="fa fa-user"></i></a></li>
                    <li><a class="tooltips" href="index.html"><span>Settings</span><i class="fa fa-cog"></i></a></li>
                    <li><a class="tooltips" href="login.php"><span>Log out</span><i class="fa fa-power-off"></i></a></li>
                    </ul>
                  </div>
                 <!--//down-->
                           <div class="menu">
                  <ul id="menu" >
                    <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                     <li id="menu-academico" ><a href="tambah.php"><i class="glyphicon glyphicon-hdd"></i> <span>Tambah Data</span> <span style="float: right"></span></a>
                       <ul id="menu-academico-sub" >
                      
                      
                      </ul>
                    </li>
                     <li id="menu-academico" ><a href="tabel_cari.php"><i class="fa fa-search"></i> <span>Cari Data</span> <span style="float: right"></span></a>
                       
                     </li>
                
                  <li id="menu-academico" ><a href="#"><i class="fa fa-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                      <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="laporan/index.php">Laporan</a></li>
                        <li id="menu-academico-boletim" ><a href="register.html">Register</a></li>
                     >
                      </ul>
                   </li>
                   
                  
                    </ul>
                  </li>
                  </ul>
                </div>
                </div>
                <div class="clearfix"></div>    
              </div>
          
      </div><!-- end .data-table -->
    </div><!-- end .row -->
  </div><!-- end .container -->
  <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!-- jquery data table -->
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.rowReorder.min.js"></script>t>
  <script src="js/dataTables.material.min.js" type="text/javascript"></script>

  <!-- SCRIPT DATA TABLE RESPONSIV -->
   <script type="text/javascript">
   
    // responsive-table jadwal
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

  </script>

  </body>
</html>
