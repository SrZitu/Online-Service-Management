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
    <a href="requesterProfile.php" class="navbar-brand">OSM</a>
   </nav>
 </header>
 
<!-- side header start -->

<div class="container-fluid">
 <div class="row">
  <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
 <div class="sidebar-sticky">
  <ul class="nav flex-column">
   <li class="nav-item "><a href="requesterProfile.php" class="nav-link <?php if(PAGE=='requesterProfile') {echo 'active';}?>" ><i class="fa fa-user-circle-o ">Profile</i></a></li>
    <li class="nav-item"><a href="requesterSubmit.php" class="nav-link <?php if(PAGE=='requesterSubmit') {echo 'active';}?>"><i class="fab fa-accessible-icon">Submit Request</i></a></li>
     <li class="nav-item"><a href="requesterService.php" class="nav-link <?php if(PAGE=='requesterService') {echo 'active';}?>"><i class="fa fa-phone fa-align center ">Service Status</i></a></li>
      <li class="nav-item"><a href="requesterChngPs.php" class="nav-link <?php if(PAGE=='requesterChngPs') {echo 'active';}?>"><i class="fa fa-lock">Change Password</i></a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link"><i class="fa fa-sign-out">Logout</i></a></li>
  </ul>
 </div>
  </nav>
