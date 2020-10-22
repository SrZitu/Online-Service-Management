<?php 
define("Title","Assigned Work");
define("PAGE","work");
include "../dbConnection.php";
include "includes/header.php";
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}
?>
<div class="col-lg-9 col-md-9 col-sm-12 mt-5">
 <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM assignwork_tb WHERE req_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 
{?>
 <h5 class="text-center mt-5">Assigned Work Details</h5>
 <table class="table table-bordered mt-5">
  <tbody>
  <tr>
   <td>Request Id</td>
   <td><?php if(isset($row['req_id'])) {echo $row['req_id'];}?></td>
  </tr>
  <tr>
   <td>Reques Info</td>
   <td><?php if(isset($row['req_info'])) {echo $row['req_info'];}?></td>
  </tr>

  <tr>
   <td>Description</td>
   <td><?php if(isset($row['req_descrip'])) {echo $row['req_descrip'];}?></td>
  </tr>
  <tr>
   <td>Name</td>
   <td><?php if(isset($row['req_name'])) {echo $row['req_name'];}?></td>
  </tr>
  <tr>
   <td>Present Address</td>
   <td><?php if(isset($row['req_present'])) {echo $row['req_present'];}?></td>
  </tr>
  <tr>
   <td>Parmanent Address</td>
   <td><?php if(isset($row['req_permanent'])) {echo $row['req_permanent'];}?></td>
  </tr>
  <tr>
   <td>city</td>
   <td><?php if(isset($row['req_city'])) {echo $row['req_city'];}?></td>
  </tr>

   <tr>
   <td>zip</td>
   <td><?php if(isset($row['req_zip'])) {echo $row['req_zip'];}?></td>
  </tr>
     <tr>
   <td>Email</td>
   <td><?php if(isset($row['req_email'])) {echo $row['req_email'];}?></td>
  </tr>
      <tr>
   <td>Mobile</td>
   <td><?php if(isset($row['req_mobile'])) {echo $row['req_mobile'];}?></td>
  </tr>
      <tr>
        <td>Assigned Date</td>
        <td>
          <?php if(isset($row['assign_date'])) {echo $row['assign_date']; } ?>
        </td>
      </tr>
      <tr>
        <td>Technician Name</td>
        <td>Zahir Khan</td>
      </tr>
      <tr>
        <td>Cust omer Sign</td>
        <td></td>
      </tr>
      <tr>
        <td>Technician Sign</td>
        <td></td>
      </tr>
 </tbody>
 </table>
  <div class="text-center">
    <form class="d-print-none d-inline mr-3"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form>
    <form class="d-print-none d-inline" action=""><input class="btn btn-secondary" type="submit" value="Close"></form>
  </div>
  <?php }
  }?>
</div>
<!-- end of the data -->