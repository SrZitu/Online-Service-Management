<?php
define('Title',"Service Status");
define('PAGE',"requesterService");
include "../Requester/includes/header.php";
include "../dbConnection.php"; 
session_start();
if(isset( $_SESSION['is_login'])){
$r_email= $_SESSION['r_email'];
}else{
 echo "<script> location.href='requesterlogin.php'</script>";
}
?>
<!-- service status section start-->
<div class="col-lg-9 col-md-9 col-sm-12 mt-5">
 <form action=""class="mt-5 form-inline d-print-none" method='post'>
  <div class="form-group mr-3">
   <label for="checkid" class="font-weight-bold mr-2 text-capitalize ">Enter Your Request Id:</label>
  <input type="text" name="checkid" id="checkid" class="form-control mr-2" onkeypress="isInputNumber(event)">
  </div>

  <button type="submit"class="btn dash-btn">Search</button>
 </form>
 <?php 
 

if(isset($_REQUEST['checkid'])){
   if($_REQUEST['checkid']==""){
  $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">All fields are required </div>';
  }else{
 $sql= "SELECT * FROM assignwork_tb WHERE req_id={$_REQUEST['checkid']}";
 $result = $conn->query($sql);
$row = $result->fetch_assoc();

 if(isset($row['req_id']) == ($_REQUEST['checkid'])){?>
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
  <?php }else{
      $msg='<div class="alert alert-info mt-4" role="alert">
      Your Request is Still Pending </div>';
    }
  }
 }?>
   <?php if(isset($msg)) {echo $msg;}?>
</div>
<!-- service status section end-->
<script>
  function isInputNumber(event) {
    var char = String.fromCharCode(event.which);
    if (!(/[0-9]/.test(char))) {
      event.preventDefault();
    }
  }
</script>
<?php include "../Requester/includes/footer.php";
?>