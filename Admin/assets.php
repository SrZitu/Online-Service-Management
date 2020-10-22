<?php 
define("Title","assets");
define("PAGE","assets");
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
<p class=" bg-dark text-white text-center p-2 mt-5">Add Products</p>
<?php
$sql="SELECT * FROM assets_tb";
$result=$conn->query($sql);
if($result->num_rows>0){?>
<table class="table">
<thead>
   <tr>
    <th scope="col"> ID</th>
    <th scope="col">Name</th>
    <th scope="col">Purchase Date</th>
    <th scope="col">Available</th>
    <th scope="col">Total Product</th>
    <th scope="col">Original Cost</th>
    <th scope="col">Selling Cost</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
<tbody>
<?php while($row=$result->fetch_assoc()){
   echo '<tr>
     <th scope="row">'.$row["pid"].'</th>
     <td>'. $row["pname"].'</td>
     <td>'. $row["pdop"].'</td>
     <td>'. $row["pava"].'</td>
     <td>'. $row["ptotal"].'</td>
     <td>'.$row["poriginalcost"].'</td>
      <td>'.$row["psellingcost"].'</td>
     <td>
     <form action="ediproduct.php" method="POST" class="d-inline">
     <input type="hidden" name="id" value='.$row["pid"].'>
      <button type="submit" class="btn btn-info" name="edit" value="Edit"><i class="fas fa-pen"></i></button></form>

           <form action="sellproduct.php" method="POST" class="d-inline">
     <input type="hidden" name="id" value='.$row["pid"].'>
      <button type="submit" class="btn btn-success" name="issue" value="issue"><i class="fas fa-handshake"></i></button></form>

      <form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["pid"].'>
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
    $sql = "DELETE FROM assets_tb WHERE pid = {$_REQUEST['id']}";
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
<div><a class="btn btn-danger box float-right" href="addproduct.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>


<?php include "includes/footer.php" ?>