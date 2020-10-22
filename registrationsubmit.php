<?php
include "dbConnection.php";

// checking if all the field values are set or not
if(isset($_REQUEST['submit'])){

 //checking if values are not  empty then show particular message
 if(($_REQUEST['r_name']=="")|| ($_REQUEST['r_email']=="")|| ($_REQUEST['r_password']=="")){
echo("all fields required");
 }else{

  $name=$_REQUEST['r_name'];
  $email=$_REQUEST['r_email'];
  $password=$_REQUEST['r_password'];
  //storing db query into a variable
  $sql="INSERT INTO regi (r_name,r_email) VALUES ('$name','$email',' $password')";
  if($conn->query($sql)===TRUE){
 echo "record inserted succesfully";
}else{
 echo "record not inserted";
}
 }
}
//update value 
if(isset($_REQUEST['update'])){

 //checking if values are not  empty then show particular message
 if(($_REQUEST['r_name']=="")|| ($_REQUEST['r_email']=="")|| ($_REQUEST['r_password']=="")){
echo("all fields required");
 }else{

  $name=$_REQUEST['r_name'];
  $email=$_REQUEST['r_email'];
  $email=$_REQUEST['r_password'];
  //storing db query into a variable
  $sql="UPDATE regi SET r_name='$name', r_email='$email' WHERE r_id={$_REQUEST['r_id']}";
  echo var_dump($sql);
  if($conn->query($sql)===TRUE){
 echo "record updated succesfully";
}else{
 echo "record is not updated";
}
 }
}

//delete key event in action
if(isset($_REQUEST['delete'])){
$sql="DELETE FROM regi WHERE r_id = {$_REQUEST['r_id']}";
  if($conn->query($sql)===TRUE){
    echo "result deleted successfully";
  }else{
    echo "result not deleted";
  }
}

//edit clicking event in action
if(isset($_REQUEST['edit'])){
$sql="SELECT * FROM regi WHERE r_id = {$_REQUEST['r_id']}";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>inserting with form</title>
</head>
<body>
<section class="user-registration" id="registrations">
        <div class="container pt-4">
          <div class="row  mt-4 mb-4">
            <div class="col-md-6  login-contents">
             <h2 class="text-center">Create An Account</h2>
              <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                  <i class="fa fa-user"></i><label for="name" class="font-weight-bold pl-2" >Name</label><input type="text" class="form-control" placeholder="Name" name="r_name" value= "<?php if(isset($row['r_name'])) {echo $row["r_name"];}?>">
                </div>
                <div class="form-group">
                  <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold pl-2" >Email</label><input type="email" class="form-control" placeholder="Email" name="r_email" value= "<?php if(isset($row['r_email'])) {echo $row["r_email"];}?>">
                </div>
                  <div class="form-group">
                  <i class="fa fa-lock"></i><label for="password" class="font-weight-bold pl-2" >Password</label><input type="password" class="form-control" placeholder="Password" name="r_password" value= "<?php if(isset($row['r_password'])) {echo $row["s_email"];}?>">
                </div>
                <button href="#" type="submit" class="btn signup-btn  btn-success" name="submit">Submit</button>
                <input type="hidden" name="s_id" value="<?php echo $row['s_id']?>">
                <button href="#" type="submit" class="btn update-btn  btn-info " name="update">Update</button>
              </form>
            </div>

            <div class="col-md-6">
            <h2 class="text-center">All Data</h2>
<?php
  $sql="SELECT * FROM regi";
  $result=$conn->query($sql);   
  if($result->num_rows>0)   {
     echo '<table class="table table-hover">';
    echo '<thead>';
      echo '<tr>';
       echo '<th>id</th>';
        echo '<th>Name</th>';
       echo '<th>Email</th>';
         echo '<th>password</th>';
       echo '<th>Delete</th>';
       echo '<th>Edit</th>';
      echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
     while($row=$result->fetch_assoc()){
         echo '<tr>';
        echo '<td>' .$row["r_id"] .'</td>';
        echo '<td>' .$row["r_name"] .'</td>';
        echo '<td>' .$row["r_email"] .'</td>';
         echo '<td>' .$row["r_password"] .'</td>';
        echo '<td><form action="" method="POST"> <input type="hidden" name="r_id" value='.$row["r_id"].'>
        <input type="submit" class="btn btn-danger btn-sm " name="delete" value="Delete"></form> </td>';
         echo '<td><form action="" method="POST"> <input type="hidden" name="r_id" value='.$row["r_id"].'>
        <input type="submit" class="btn btn-warning btn-sm " name="edit" value="Edit"></form> </td>';
      echo '</tr>';

     }
   echo '</tbody>';
  echo '</table>';
  }else{
   echo "0 result";
  }   
  
$conn->close();
?>
</div>
          </div>
        </div>
      </div>
      
      </section>
</body>
</html>