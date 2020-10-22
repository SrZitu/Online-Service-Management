<?php
include "dbConnection.php";
if(isset($_REQUEST['rSignUp'])){
//checking empty fields
if(($_REQUEST['r_name'] =="") || ($_REQUEST['r_email'] =="")|| ($_REQUEST['r_password'] =="")){
 $field = ' <div class="alert alert-warning mt-2" role="alert" >All fields are required</div> ';
}else{
  //  $rEmail= $_REQUEST["r_email"];
  //email already registered
// $sql = "SELECT r_email FROM regi WHERE r_email = '$rEmail'";
 $sql = "SELECT r_email  FROM regi WHERE r_email = '".$_REQUEST['r_email']."'";

$result = $conn->query($sql);

$result->num_rows;
if($result->num_rows==1){
 $field= ' <div class="alert alert-warning mt-2" role="alert" >Email id alrady registered</div>';
}else{
  // assigning user's variables
 $rName= $_REQUEST['r_name'];
 $rEmail= $_REQUEST["r_email"];
 $rPassword= $_REQUEST["r_password"];
$sql= "INSERT INTO regi (r_name, r_email, 
r_password) VALUES ('$rName', '$rEmail','$rPassword' )";
if($conn->query($sql) == TRUE){
 $field= ' <div class="alert alert-success mt-2" role="alert" >Account Created Successfully</div>';
 
} else{
  $field=' <div class="alert alert-warning mt-2" role="alert" >unable to create account</div>';
      }
    }
  }

}
  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>inserting with form</title>
</head>
<body>



      <section class="user-registration" id="registrations">
        <div class="container pt-4">
          <h2 class="text-center">Create An Account</h2>
          <div class="row  mt-4 mb-4">
            <div class="col-md-6 offset-md-3 login-contents">
              <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                  <i class="fa fa-user"></i><label for="name" class="font-weight-bold pl-2" >Name</label><input type="text" class="form-control" placeholder="Name" name="r_name">
                </div>
                <div class="form-group">
                  <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold pl-2" >Email</label><input type="email" class="form-control" placeholder="Email" name="r_email">
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i><label for="pass" class="font-weight-bold pl-2" >Password</label><input type="Password" class="form-control" placeholder="Password" name="r_password">
                </div>
                <button href="#" type="submit" class="btn signup-btn btn-success btn-block" name="rSignUp">SignUp</button>
                <?php if(isset($field)) {echo  $field;} 
                
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      </section>
      <script src="../js/jquery-3.3.1.min.js" ></script>
<script src="../js/popper.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
 <script src="../js/all.js" ></script>
</body>
</html>
