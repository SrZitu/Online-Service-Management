<?php 
define('Title',"Profile");
include "../Requester/includes/header.php";
include "../dbConnection.php";
session_start();
if(isset( $_SESSION['is_login'])){
$r_email= $_SESSION['r_email'];
}else{
 echo "<script> location.href='requesterlogin.php'</script>";
}
$sql="SELECT * FROM req_tb WHERE req_id={$_SESSION['myid']} ";
$result=$conn->query($sql);
if($result->num_rows==1){
 $row=$result->fetch_assoc();
  echo "<div class='ml-5 mt-5'>
 <table class='table'>
  <tbody>
   <tr>
     <th>Request ID</th>
     <td>".$row['req_id']."</td>
   </tr>
   <tr>
     <th>Name</th>
     <td>".$row['req_name']."</td>
   </tr>
   <tr>
   <th>Email ID</th>
   <td>".$row['req_email']."</td>
  </tr>
   <tr>
    <th>Request Info</th>
    <td>".$row['req_info']."</td>
   </tr>
   <tr>
    <th>Request Description</th>
    <td>".$row['req_descrip']."</td>
   </tr>

   <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
  </tbody>
 </table> </div>
 ";

}else {
  echo "Failed";
}
?>
<?php include "../Requester/includes/footer.php"?>