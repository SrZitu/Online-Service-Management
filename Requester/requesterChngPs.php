<?php
define('Title',"Change Password");
define('PAGE',"requesterChngPs");
 include "../Requester/includes/header.php";
include "../dbConnection.php";
session_start();
if(isset( $_SESSION['is_login'])){
$r_email= $_SESSION['r_email'];
}else{
  echo "<script>location.href='requesterlogin.php'</script>";
}
$r_email= $_SESSION['r_email'];
if(isset($_REQUEST['passwordUpdate'])){
 if($_REQUEST['r_password']==""){
  $msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">All fields required</div>';
 }else{
$r_password=$_REQUEST['r_password'];
$sql="UPDATE regi SET r_password='$r_password' WHERE r_email='$r_email'";
if($conn->query($sql)== TRUE){
  $msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Password Updated Successfully</div>';
}else{
   $msg= '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Password Can not be Update.</div>';
}
 }
}
 ?>
  <!-- password changing section start -->
    <div class="col-sm-6 mt-5 update-form">
              <form action="" class="p-4 mt-3 mx-5" method="POST">
                <div class="form-group">
                  <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold pl-2" >Email</label>
                  <input type="email" class="form-control" name="r_email" id="r_email" value="<?php echo $r_email ?>" readonly>
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i><label for="inputPassword" class="font-weight-bold pl-2" >New Password</label>
                  <input type="password" class="form-control"  name="r_password" id="r_password" >
                </div>
                <button href="#" type="submit" class="btn custom-btn2" name="passwordUpdate">Update</button>
                  <button href="#" type="submit" class="btn custom-btn2 ml-2" name="passwordRest">Reset</button>
                <?php if(isset($msg)) {echo "$msg";}?>
              </form>
            </div>
      <!-- password changing section end -->
<?php include "../Requester/includes/footer.php"?>