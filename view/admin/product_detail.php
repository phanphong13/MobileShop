 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="assets/img/favicon.ico">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     
     <!-- link fontawesome -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
     /> 
     <!-- CSS Files -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
     <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="assets/css/demo.css" rel="stylesheet" />
     <link rel="stylesheet" href="assets/css/style-self.css" />
 </head>
 
 <body>
     <div class="wrapper">
         <div class="sidebar" data-image="assets/img/sidebar/sidebar-5.jpg">
             <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
 
         Tip 2: you can also add an image using data-image tag
     -->
             <div class="sidebar-wrapper">
                 <div class="logo">
                     <a href="?controller=home" class="simple-text">
                         Mobile Shop
                     </a>
                 </div>
                 <ul class="nav">
                     <li>
                         <a class="nav-link" href="?controller=user">
                             <i class="nc-icon nc-circle-09"></i>
                             <p>User</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="?controller=payment_admin">
                             <i class="nc-icon nc-circle-09"></i>
                             <p>Payment</p>
                         </a>
                     </li>
                     <li class="nav-item active">
                         <a class="nav-link" href="?controller=product_admin">
                             <i class="nc-icon nc-notes"></i>
                             <p>Product List</p>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="?controller=product_admin"><i class="fa-solid fa-circle-chevron-left"></i> Quay Lại </a>
             </nav>
             <!-- End Navbar -->
             <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <!-- product detail -->
                         <div class="col-md-12">
                             <div class="card card-plain table-plain-bg">
                                 <div class="card-header ">
                                     <h4 class="card-title">Chi tiết của <?php echo $result[0]['name']?></h4>
                                     <p class="card-category"></p>
                                 </div>

                                 <!-- COLOR -->
                                <div class="card-body table-full-width table-responsive">
                                     <div><h5>Color</h5></h5></div>
                                     <table class="table table-hover table-manage">
                                         <thead>
                                             <th>ID</th>
                                             <th>ID Product</th>
                                             <th>Màu</th>
                                             <th>Giá</th>
                                             <th>Link IMG</th>
                                             <!-- <th class="option-heading">Tùy Chọn</th>
                                             <th class="add-row-table">
                                                Thêm
                                                <i class="table-icon-add fa-solid fa-plus"></i>
                                           </th> -->
                                         </thead>
                                         <tbody>
                                             <?php 
                                                if (isset($color)) {
                                                    for ($i = 0; $i < count($color); $i++) {
                                                        ?>
                                                       
                                             <tr>
                                                 <td class="has-edit"><?php echo $color[$i]['id'];?></td>
                                                 <td class="has-edit"><?php echo $color[$i]['product_id'];?></td>
                                                 <td class="has-edit"><?php echo $color[$i]['color'];?></td>
                                                 <td class="has-edit"><?php echo number_format($color[$i]['sale_price_color'],0,'',',').' đ';?></td>
                                                 <td class="has-edit"><?php echo $color[$i]['link_img'];?></td>
                                                 
                                                 <!-- <td class="btn-control edit-btn"><i class="table-icon fa-regular fa-pen-to-square"></i></td>
                                                 <td class="btn-control save-btn hidden"><i class="table-icon fa-regular fa-floppy-disk"></i></td>
                                                 <td class="delete-product">
                                                     <a href="#" class="delete-product__link">Xóa</a>
                                                 </td> -->
                                             </tr>
                                             <?php
                                                    }
                                                }
                                             ?>
                                             
                                         </tbody>
                                     </table>
                                 </div>

                                 <!-- VERSION -->
                                 <div class="card-body table-full-width table-responsive">
                                     <div><h5>Các phiên bản</h5></h5></div>
                                     <table class="table table-hover table-manage">
                                         <thead>
                                             <th>ID</th>
                                             <th>ID Product</th>
                                             <th>Version</th>
                                             <th>Giá</th>
                                             <th>Version ID Product</th>
                                             <!-- <th class="option-heading">Tùy Chọn</th>
                                             <th class="add-row-table">
                                                Thêm
                                                <i class="table-icon-add fa-solid fa-plus"></i>
                                           </th> -->
                                         </thead>
                                         <tbody>
                                             <?php 
                                                if (isset($version)) {
                                                    for ($i = 0; $i < count($version); $i++) {
                                                        ?>
                                                       
                                             <tr>
                                                 <td class="has-edit"><?php echo $version[$i]['id'];?></td>
                                                 <td class="has-edit"><?php echo $version[$i]['product_id'];?></td>
                                                 <td class="has-edit"><?php echo $version[$i]['version'];?></td>
                                                 <td class="has-edit"><?php echo number_format($version[$i]['price_version'],0,'',',').' đ';?></td>
                                                 <td class="has-edit"><?php echo $version[$i]['version_id'];?></td>
                                                 
                                                 <!-- <td class="btn-control edit-btn"><i class="table-icon fa-regular fa-pen-to-square"></i></td>
                                                 <td class="btn-control save-btn hidden"><i class="table-icon fa-regular fa-floppy-disk"></i></td>
                                                 <td class="delete-product">
                                                     <a href="#" class="delete-product__link">Xóa</a>
                                                 </td> -->
                                             </tr>
                                             <?php
                                                    }
                                                }
                                             ?>
                                             
                                         </tbody>
                                     </table>
                                 </div>

                                 <!-- INFO -->

                                 <div class="card-body table-full-width table-responsive">
                                     <div><h5>Thông số kỹ thuật</h5></h5></div>
                                     <table class="table table-hover table-manage">
                                         <thead>
                                             <th>ID</th>
                                             <th>ID Product</th>
                                             <th>Name</th>
                                             <th>Value</th>
                                             <!-- <th class="option-heading">Tùy Chọn</th>
                                             <th class="add-row-table">
                                                Thêm
                                                <i class="table-icon-add fa-solid fa-plus"></i>
                                           </th> -->
                                         </thead>
                                         <tbody>
                                             <?php 
                                                if (isset($info)) {
                                                    for ($i = 0; $i < count($info); $i++) {
                                                        ?>
                                                       
                                             <tr>
                                                 <td class="has-edit"><?php echo $info[$i]['id'];?></td>
                                                 <td class="has-edit"><?php echo $info[$i]['product_id'];?></td>
                                                 <td class="has-edit"><?php echo $info[$i]['name'];?></td>
                                                 <td class="has-edit"><?php echo $info[$i]['value'];?></td>
                                                 
                                                 <!-- <td class="btn-control edit-btn"><i class="table-icon fa-regular fa-pen-to-square"></i></td>
                                                 <td class="btn-control save-btn hidden"><i class="table-icon fa-regular fa-floppy-disk"></i></td>
                                                 <td class="delete-product">
                                                     <a href="#" class="delete-product__link">Xóa</a>
                                                 </td> -->
                                             </tr>
                                             <?php
                                                    }
                                                }
                                             ?>
                                             
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
            
         </div>
     </div>
     
 </body>
 <!--   Core JS Files   -->
 <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
 <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
 <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="assets/js/plugins/bootstrap-switch.js"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="assets/js/plugins/chartist.min.js"></script>
 <!--  Notifications Plugin    -->
 <script src="assets/js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="assets/js/demo.js"></script>
 
 <script src="assets/js/admin.js"></script>
 
 </html>
 