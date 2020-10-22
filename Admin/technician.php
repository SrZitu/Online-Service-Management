<?php 
define("Title","technician");
define("PAGE","technician");
include "../dbConnection.php";
include "includes/header.php";
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}
?>

<div class="col-lg-9 col-md-9 col-sm-9 mx mt-5">
<p class=" bg-dark text-white text-center p-2 mt-5">List of Technician</p>
<?php
$sql="SELECT * FROM tech_tb";
$result=$conn->query($sql);
if($result->num_rows>0){?>
<table class="table">
<thead>
   <tr>
    <th scope="col"> ID</th>
    <th scope="col">Name</th>
    <th scope="col">City</th>
    <th scope="col">Mobile</th>
    <th scope="col">Email</th>
     <th scope="col">Action</th>
   </tr>
  </thead>
<tbody>
<?php while($row=$result->fetch_assoc()){
   echo '<tr>
     <th scope="row">'.$row["empid"].'</th>
     <td>'. $row["empName"].'</td>
     <td>'. $row["empCity"].'</td>
     <td>'. $row["empMobile"].'</td>
     <td>'.$row["empEmail"].'</td>
     <td>
     <form action="editemp.php" method="POST" class="d-inline">
     <input type="hidden" name="id" value='.$row["empid"].'>
      <button type="submit" class="btn btn-info" name="edit" value="Edit"><i class="fas fa-pen"></i></button></form>

      <form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["empid"].'>
    <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
    </form>
      </td>
     </tr>';
}?>
</tbody>
 </table>
<?php }else {
    echo "0 Result";
  }
    if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM tech_tb WHERE empid = {$_REQUEST['id']}";
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
</div>
<div><a class="btn btn-danger box float-right" href="insertemp.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php
include('includes/footer.php'); 
?>
