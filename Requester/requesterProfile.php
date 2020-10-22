<?php 
define('Title',"Profile");
define('PAGE',"requesterProfile");
include "../Requester/includes/header.php";
include "../dbConnection.php";
session_start();
if(isset( $_SESSION['is_login'])){
$r_email= $_SESSION['r_email'];
}else{
 echo "<script> location.href='requesterlogin.php'</script>";
}
$sql="SELECT r_name,r_email  FROM regi WHERE r_email='$r_email'";
$result=$conn->query($sql);
if($result->num_rows==1){
 $row=$result->fetch_assoc();
$r_name=$row['r_name'];
}
if(isset($_REQUEST['nameUpdate'])){
if($_REQUEST['r_name']==""){
$msg = '<div class="alert alert-warning mt-2" role="alert">All fields are required </div>';
}else{
 $r_name=$_REQUEST['r_name'];
 $sql="UPDATE regi SET r_name='$r_name' WHERE r_email='$r_email'";
if($conn->query($sql)==TRUE){
 $msg = '<div class="alert alert-success mt-2" role="alert">Updated Successfully</div>';
}else{
 $msg = '<div class="alert alert-warning mt-2" role="alert">Unable to Update</div>';
}
}
}
?>

  <!-- profile area start -->
   <div class="col-sm-6 mt-5 update-form">
              <form action="" class="p-4 mt-3 mx-5" method="POST">
                <div class="form-group">
                  <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold pl-2" >Email</label>
                  <input type="email" class="form-control" name="r_email" id="r_email" value="<?php echo $r_email ?>" readonly>
                </div>
                <div class="form-group">
                  <i class="fa fa-user"></i><label for="name" class="font-weight-bold pl-2" >Name</label>
                  <input type="text" class="form-control"  name="r_name" id="r_name" value="<?php echo $r_name ?>">
                </div>
                <button href="#" type="submit" class="btn custom-btn2" name="nameUpdate">Update</button>
                <?php if(isset($msg)) {echo "$msg";}?>
              </form>
            </div>
<!-- profile area end -->
<?php include "../Requester/includes/footer.php"?>