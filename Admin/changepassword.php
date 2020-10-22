<?php 
define("Title","Change Password");
define("PAGE","changepassword");
include "../dbConnection.php";
include "includes/header.php";
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}
  $rEmail= $_SESSION['a_email'];
if(isset($_REQUEST['passwordUpdate'])){
 if($_REQUEST['a_password']==""){
  $msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">All fields required</div>';
 }else {
    $sql = "SELECT * FROM admin_regi WHERE a_email='$aEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $aPass = $_REQUEST['a_password'];
     $sql = "UPDATE admin_regi SET a_password = '$aPass' WHERE a_email = '$aEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}
?>

  <!-- password changing section start -->
    <div class="col-sm-6 mt-5 update-form">
              <form action="" class="p-4 mt-3 mx-5" method="POST">
                <div class="form-group">
                  <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold pl-2" >Email</label>
                  <input type="email" class="form-control" name="a_email" id="a_email" value="<?php echo $rEmail ?>" readonly>
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i><label for="inputPassword" class="font-weight-bold pl-2" >New Password</label>
                  <input type="password" class="form-control"  name="a_password" id="a_password" >
                </div>
                <button href="#" type="submit" class="btn custom-btn2" name="passwordUpdate">Update</button>
                  <button href="#" type="submit" class="btn custom-btn2 ml-2" name="passwordRest">Reset</button>
                <?php if(isset($msg)) {echo "$msg";}?>
              </form>
            </div>
      <!-- password changing section end -->
<?php include "includes/footer.php" ?>