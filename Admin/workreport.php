<?php 
define("Title","workreport");
define("PAGE","workreport");
include "../dbConnection.php";
include "includes/header.php";
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <form action="" method="POST" class="d-print-none mt-5">
    <div class="form-row">
      <div class="form-group col-md-2">
        <input type="date" class="form-control" id="startdate" name="startdate">
      </div> <span> to </span>
      <div class="form-group col-md-2">
        <input type="date" class="form-control" id="enddate" name="enddate">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">
      </div>
    </div>
  </form>

  <?php
  if(isset($_REQUEST['searchsubmit'])){
   $startdate=$_REQUEST['startdate'];
   $enddate=$_REQUEST['enddate'];
 $sql="SELECT * FROM assignwork_tb WHERE assign_date BETWEEN '$startdate' AND '$enddate'";
 $result=$conn->query($sql);
 if($result->num_rows>0){
 echo '
  <p class=" bg-dark text-white p-2 mt-4">Details</p>
  <table class="table">
    <thead>
      <tr>
      <th scope="col">Req ID</th>
      <th scope="col">Request Info</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Mobile</th>
      <th scope="col">Technician</th>
      <th scope="col">Assigned Date</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $result->fetch_assoc()){
      echo '<tr>
        <th scope="row">'.$row["req_id"].'</th>
    <td>'.$row["req_info"].'</td>
    <td>'.$row["req_name"].'</td>
    <td>'.$row["req_permanent"].'</td>
    <td>'.$row["req_city"].'</td>
    <td>'.$row["req_mobile"].'</td>
    <td>'.$row["assign_tech"].'</td>
    <td>'.$row["assign_date"].'</td>
      </tr>';
    }
    echo '<tr>
    <td><form class="d-print-none"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form></td>
  </tr></tbody>
  </table>';
  } else {
    echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found ! </div>";
  }
  }?>


<?php include "includes/footer.php" ?>