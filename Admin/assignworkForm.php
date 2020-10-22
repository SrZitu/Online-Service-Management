<?php
if(session_id()==""){
session_start();
}

if(isset($_SESSION['is_adminlogin'])){
  $rEmail=$_SESSION['a_email'];
}else{
  echo '<script>location.href="adminLogin.php"</script>';
}
if(isset($_REQUEST['view'])){
$sql="SELECT * FROM req_tb WHERE req_id={$_REQUEST['id']}";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
}
if(isset($_REQUEST['close'])){
$sql="DELETE FROM req_tb WHERE req_id={$_REQUEST['id']}";
if($conn->query($sql) == TRUE){
   echo '<meta http-equiv="refresh" content="0" url=?closed>';
}else{
 echo "unable to delete";
}
}

if(isset($_REQUEST['assign'])){
  //checking empty fields
  if(($_REQUEST['request_id']) ==""||($_REQUEST['request_info']) ==""||($_REQUEST['request_descrip']) == ""||($_REQUEST['request_name']) == ""||($_REQUEST['request_present']) == ""||($_REQUEST['request_permanent']) ==""||($_REQUEST['request_city'])  == ""||($_REQUEST['request_zip']) == ""||($_REQUEST['request_email']) == ""||($_REQUEST['request_mobilenum']) == ""|| ($_REQUEST['assigntech']) == ""||($_REQUEST['assign_date']) == ""){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">All fields are required </div>';
  }else{
$req_id=($_REQUEST['request_id']);
$req_info=($_REQUEST['request_info']);
$req_descrip=($_REQUEST['request_descrip']);
$req_name=($_REQUEST['request_name']);
$req_present=($_REQUEST['request_present']);
$req_permanent=($_REQUEST['request_permanent']);
$req_city=($_REQUEST['request_city']);
$req_zip=($_REQUEST['request_zip']);
$req_email=($_REQUEST['request_email']);
$req_mobilenum=($_REQUEST['request_mobilenum']);
$assign_technician=($_REQUEST['assigntech']);
$assign_date=($_REQUEST['assign_date']);

$sql="INSERT INTO assignwork_tb(req_id, req_info, req_descrip, req_name, req_present, req_permanent, req_city,req_zip, req_email, req_mobile, assign_tech, 	assign_date) VALUES('$req_id','$req_info','$req_descrip','$req_name','$req_present','$req_permanent','$req_city','$req_zip','$req_email','$req_mobilenum','$assign_technician','$assign_date')";

if($conn->query($sql)==TRUE){

$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submitted Successfully </div>';

}else{
  $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Submit </div>';
}
  }
 }
?>

  <div class="col-md-6 col-lg-6 col-sm-12 submit-form p-5 mt-5 jumbotron">
              <form action="" class="mx-5" method="POST">
               <h5 class="text-center"> Assign Work Order request</h5>
                 <div class="form-group">
                  <label for="id" class="font-weight-bold pl-2"  >ID</label>
                  <input type="text" class="form-control" name="request_id" value="<?php if(isset($row['req_id'])) echo $row['req_id'];?>" readonly>
                </div>
                <div class="form-group">
                  <label for="inputrequestInfo" class="font-weight-bold pl-2"  >Request Info</label>
                  <input type="text" class="form-control" name="request_info" id="requestInfoId" placeholder="Request Info" value="<?php if(isset($row['req_info'])) echo $row['req_info'];?>" >
                </div>
                  <div class="form-group">
                  <label for="inputreqestdescrip" class="font-weight-bold pl-2" >Request Descripton</label>
                  <input type="text" class="form-control" name="request_descrip" id="reqestdescripId" placeholder="Request Descripton" value="<?php if(isset($row['req_descrip'])) echo $row['req_descrip'];?>">
                </div>
                <div class="form-group">
                 <label for="inputname" class="font-weight-bold pl-2" >Name</label>
                  <input type="text" class="form-control"  name="request_name" id="requestername" placeholder="name" value="<?php if(isset($row['req_name'])) echo $row['req_name'];?>">
                </div>
                
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputadress1" class="font-weight-bold pl-2" >Present Address</label>
                  <input type="text" class="form-control"  name="request_present" id="requesteraddressID" placeholder="Present Address" value="<?php if(isset($row['req_present'])) echo $row['req_present'];?>">
                </div>
                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputadress2" class="font-weight-bold pl-2" >Permanent Address</label>
                  <input type="text" class="form-control"  name="request_permanent" id="requesteraddressID2" placeholder="Permanent Address" value="<?php if(isset($row['req_permanent'])) echo $row['req_permanent'];?>">
                </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputcity" class="font-weight-bold pl-2" >City</label>
                  <input type="text" class="form-control"  name="request_city" id="requestercityId" placeholder="City" value="<?php if(isset($row['req_city'])) echo $row['req_city'];?>">
                </div>
                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputzip" class="font-weight-bold pl-2" >Zip Code</label>
                  <input type="text" class="form-control"  name="request_zip" id="requesterZipID" placeholder="Enter Zip Code" onkeypress="isInputnNumber(event)" value="<?php if(isset($row['req_zip'])) echo $row['req_zip'];?>">
                </div>
                </div>
                     <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputemail" class="font-weight-bold pl-2" >Email</label>
                  <input type="email" class="form-control"  name="request_email" id="requesteremailID" placeholder="email" value="<?php if(isset($row['req_email'])) echo $row['req_email'];?>">
                </div>
                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputmobile" class="font-weight-bold pl-2" >Mobile Number</label>
                  <input type="text" class="form-control"  name="request_mobilenum" id="requestermobile" placeholder="Mobile Number"  onkeypress="isInputnNumber(event)" value="<?php if(isset($row['req_mobilenum'])) echo $row['req_mobilenum'];?>">
                </div>
                 </div>
                <div class="form-row">
                   <div class="form-group col-md-6 col-lg-6 col-sm-12">
                   <label for="assigntech" class="font-weight-bold pl-2">Assign to Technician</label>
                    <input type="text" class="form-control" id="assigntech" name="assigntech" >
                   </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <label for="inputdate" class="font-weight-bold pl-2" >Date</label>
                  <input type="date" class="form-control"  name="assign_date" id="requesterdateId" >
                  </div>
                </div>

                <button href="#" type="submit" class="btn custom-btn2" name="assign">Assign</button>
                  <button href="#" type="submit" class="btn custom-btn2" name="reset">Reset</button>
                
              </form>
             <?php if(isset($msg)) {echo "$msg";}?>
            </div>
          <!-- side header end -->
            <!-- only number on input field -->
            <script>{

              function 
              isInputnNumber(event){
                var char= String.fromCharCode(event.which);
                if(!(/[0-9]/.test(char))){
                  event.preventDefault()
                }
              }
            } </script>