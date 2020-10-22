<?php 
define("Title","Request");
define("PAGE","request");
include "../dbConnection.php";
include "includes/header.php";

session_start();
if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}
?>

    <div class="col-lg-4 col-md-4 col-sm-4 mt-5 text-white">

    <?php 
    $sql="SELECT req_id, req_info, req_descrip, req_date FROM req_tb";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
     while($row= $result->fetch_assoc()){
     echo '<div class="card card-back2 mt-5 mx-5 text-center">';
      echo '<div class="card-header ">';
       echo 'Request ID: '.$row['req_id'];
       echo '</div>';
       echo '<div class="card-body">';
      echo '<h5 class="card-title">Request Info :'.$row['req_info'];
      echo '</h5>';
      echo '<p class="card-text text-center">' . $row['req_descrip'] . '</p>';
     echo '<p class="card-text text-center">Request Date: ' . $row['req_date'] . '</p>';
     echo '<form action="" method="POST">';
     echo '<input type="hidden" name="id" value='. $row["req_id"] .'>';
      echo '<input type="submit" class="btn dash-btn mr-3" name="view" value="view" name="view">';
     echo '<input type="submit" class="btn dash-btn"  value="close" name="close">';
     echo '</form>';
     echo '</div>';
      echo '</div>';
     }
    }
    ?>
</div>


<?php include "includes/footer.php"; 
include "assignworkForm.php";
?>