<?php
include ('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
if(isset($_REQUEST['r_email'])){

$rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['r_email']));
$rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['r_password']));

$sql="SELECT r_email, r_password	FROM regi WHERE r_email ='".$rEmail."' AND r_password = '".$rPassword."' limit 1 ";
// $sql="SELECT email FROM users WHERE email ='".$rEmail."'";

$result= $conn->query($sql);
if($result->num_rows == 1){
  $_SESSION['is_login']=true;
  $_SESSION['r_email']=$rEmail;
  echo "<script> location.href='requesterProfile.php'</script>";
  exit;
}
else{
  $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
}
}
}
else{
    echo "<script> location.href='requesterProfile.php'</script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
<!-- bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <section class="login-section" id="requesterlogin">
        <div class="container pt-4">
          <h2 class="text-center">Login into your account</h2>
          <div class="row  mt-4 mb-4">
            <div class="col-md-6 offset-md-3 contact-contents">
              <form action="" class="shadow-lg p-4" method="POST">
               
                <div class="form-group">
                  <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold pl-2" >Email</label><input type="email" class="form-control" placeholder="Email" name="r_email">
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i><label for="pass" class="font-weight-bold pl-2" >Password</label><input type="Password" class="form-control" placeholder="Password" name="r_password">
                </div>
                <button href="#" type="submit" class="btn login-btn btn-success btn-block" name="rLogin">Login</button>
                <?php if(isset($msg)) {echo  $msg;} 
                
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      </section>
     <div class="text-center"> <a href="../index.php" class="btn btn-danger">Back to home</a> </div>
<script src="../js/jquery-3.3.1.min.js" ></script>
<script src="../js/popper.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
 <script src="../js/all.js" ></script>
</body>
</html>