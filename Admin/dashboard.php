<?php 
define("Title","dashboard");
define("PAGE","dashboard");
include "../dbConnection.php";
include "includes/header.php";
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}

?>


   <!-- dashboard card start -->
   <div class="col-lg-9 col-md-9 col-sm-9">
   <div class="row mx-5 mt-5 text-center">
    <div class="col-lg-4 col-md-4 col-sm-4 text-white">
      <div class="card card-back" style="width: 18rem;">
      <div class="card-header">Request Received</div>
     <div class="card-body">
    <h5 class="card-title">43</h5>
    <a href="#" class="dash-btn">View</a>
  </div>
</div>
</div>

   <div class="col-lg-4 col-md-4 col-sm-4 text-white">
      <div class="card card-back2" style="width: 18rem;">
      <div class="card-header">Assigned Work</div>
     <div class="card-body">
    <h5 class="card-title">25</h5>
    <a href="#" class="dash-btn">View</a>
  </div>
</div>
</div>

   <div class="col-lg-4 col-md-4 col-sm-4 text-white">
      <div class="card card-back3" style="width: 18rem;">
      <div class="card-header">No of Technician</div>
     <div class="card-body">
    <h5 class="card-title">1</h5>
    <a href="#" class="dash-btn">View</a>
  </div>
</div>
</div>
 </div>
 <!-- dashboard card end -->

 <!-- data showing portion start-->
  <div class="mx-5 mt-5 text-center">
    <!--Table-->
    <p class=" bg-dark text-white p-2">List of Requesters</p>
    <?php
    $sql = "SELECT * FROM regi";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Requester ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["r_id"].'</th>';
    echo '<td>'. $row["r_name"].'</td>';
    echo '<td>'.$row["r_email"].'</td>';
  }
 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
</div>
</div>
<?php include "includes/footer.php" ?>