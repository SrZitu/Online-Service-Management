<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> <?php echo Title ?> </title>
     <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/jquery-ui.min.css" />
     <link rel="stylesheet" href="../scss/styles.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <!-- Font awesome css -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
  <!--slick-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <!--light box plugin-->

</head>
<body>
 <!-- navbar -->
 <header class="profile-top-nav">
  <nav class="profile-nav-bar navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
    <a href="dashboard.php" class="navbar-brand">OSM</a>
   </nav>
 </header>
 
<!-- side header start -->

<div class="container-fluid">
 <div class="row">
  <nav class="col-sm-2 bg-light d-print-none sidebar py-5">
 <div class="sidebar-sticky">
  <ul class="nav flex-column">
   <li class="nav-item "><a href="dashboard.php" class="nav-link <?php if(PAGE=='dashboard') {echo 'active';}?>" ><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</i></a></li>

    <li class="nav-item"><a href="work.php" class="nav-link <?php if(PAGE=='work') {echo 'active';}?>"><i class="fab fa-accessible-icon">Work Order</i></a></li>

     <li class="nav-item"><a href="request.php" class="nav-link <?php if(PAGE=='request') {echo 'active';}?>"><i class="fas fa-align-center ">Requests</i></a></li>

     <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'assets') { echo 'active'; } ?>" href="assets.php">
        <i class="fa fa-database"></i>
        Assets
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
        <i class="fab fa-teamspeak"></i>
        Technician
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requesters') { echo 'active'; } ?>" href="requesters.php">
        <i class="fa fa-users"></i>
        Requester
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'sellreport') { echo 'active'; } ?>" href="soldproductreport.php">
        <i class="fa fa-table"></i>
        Sell Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'workreport') { echo 'active'; } ?>" href="workreport.php">
        <i class="fa fa-table"></i>
        Work Report
       </a>
      </li>
      <li class="nav-item"><a href="changepassword.php" class="nav-link <?php if(PAGE=='changepassword') {echo 'active';}?>"><i class="fa fa-lock">Change Password</i></a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link"><i class="fa fa-sign-out">Logout</i></a></li>
  </ul>
 </div>
  </nav>
