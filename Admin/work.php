<?php 
define("Title","Work Order");
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
<!-- Showing work order data start-->
<div class="col-lg-9 col-sm-9 col-sm-12 mt-5">
<?php 
$sql="SELECT * FROM assignwork_tb";
$result=$conn->query($sql);
if($result->num_rows>0){
 echo '<table class="table table-bordered">
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
      <th scope="col">Action</th>
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
    <td>

    <form action="viewassignwork.php" method="POST" class="d-inline">
    <input type="hidden" name="id" value='. $row["req_id"] .'>
    <button type="submit" class="btn btn-warning" name="view" value="View"><i class="far fa-eye"></i></button>
    </form>

    <form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='. $row["req_id"] .'>
    <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
    </form>
    </td>
    </tr>';
   }
   echo '</tbody> </table>';
}else {
    echo "0 Result";
  }
    if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM assignwork_tb WHERE req_id = {$_REQUEST['id']}";
    if($conn->query($sql) === TRUE){
      // echo "Record Deleted Successfully";
      // below code will refresh the page after deleting the record
      echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
      } else {
        echo "Unable to Delete Data";
      }
    }
?>
</div>
<!-- Showing work order data end -->
<?php include "includes/footer.php" ?><?php 
