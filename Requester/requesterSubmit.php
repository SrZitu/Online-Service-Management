<?php
define('Title',"Submit Request");
define('PAGE',"requesterSubmit");
include "../Requester/includes/header.php" ;
include "../dbConnection.php";
session_start();
if(isset( $_SESSION['is_login'])){
$r_email= $_SESSION['r_email'];
}else{
  echo "<script>location.href='requesterlogin.php'</script>";
}
if(isset($_REQUEST['requesterSubmit'])){
  //checking empty fields
  if(($_REQUEST['request_info']) ==""||($_REQUEST['request_descrip']) == ""||($_REQUEST['request_name']) == ""||($_REQUEST['request_present']) == ""||($_REQUEST['request_permanent']) ==""||($_REQUEST['request_city'])  == ""||($_REQUEST['request_zip']) == ""||($_REQUEST['request_email']) == ""||($_REQUEST['request_mobilenum']) == ""||($_REQUEST['request_date']) == ""){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">All fields are required </div>';
  }else{
$req_info=($_REQUEST['request_info']);
$req_descrip=($_REQUEST['request_descrip']);
$req_name=($_REQUEST['request_name']);
$req_present=($_REQUEST['request_present']);
$req_permanent=($_REQUEST['request_permanent']);
$req_city=($_REQUEST['request_city']);
$req_zip=($_REQUEST['request_zip']);
$req_email=($_REQUEST['request_email']);
$req_mobilenum=($_REQUEST['request_mobilenum']);
$req_date=($_REQUEST['request_date']);

$sql="INSERT INTO req_tb(req_info, req_descrip, req_name, req_present, req_permanent, req_city,req_zip, req_email, req_mobilenum, req_date) VALUES('$req_info','$req_descrip','$req_name','$req_present','$req_permanent','$req_city','$req_zip','$req_email','$req_mobilenum','$req_date')";

if($conn->query($sql)==TRUE){
$generatedId=mysqli_insert_id($conn);
$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submitted Successfully </div>';
$_SESSION['myid']=$generatedId;
  echo "<script>location.href='requestSuccess.php'</script>";
}else{
  $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Submit </div>';
}
  }
}
?>
  <div class="col-md-10 col-sm-9 submit-form p-5 mt-5">
              <form action="" class="mx-5 d-print-none" method="POST">
                <div class="form-group">
                  <label for="inputrequestInfo" class="font-weight-bold pl-2"  >Request Info</label>
                  <input type="text" class="form-control" name="request_info" id="requestInfoId" placeholder="Request Info">
                </div>
                  <div class="form-group">
                  <label for="inputreqestdescrip" class="font-weight-bold pl-2" >Request Descripton</label>
                  <input type="text" class="form-control" name="request_descrip" id="reqestdescripId" placeholder="Request Descripton" >
                </div>
                <div class="form-group">
                 <label for="inputname" class="font-weight-bold pl-2" >Name</label>
                  <input type="text" class="form-control"  name="request_name" id="requestername" placeholder="name">
                </div>
                
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputadress1" class="font-weight-bold pl-2" >Present Address</label>
                  <input type="text" class="form-control"  name="request_present" id="requesteraddressID" placeholder="Present Address">
                </div>
                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputadress2" class="font-weight-bold pl-2" >Permanent Address</label>
                  <input type="text" class="form-control"  name="request_permanent" id="requesteraddressID2" placeholder="Permanent Address">
                </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputcity" class="font-weight-bold pl-2" >City</label>
                  <input type="text" class="form-control"  name="request_city" id="requestercityId" placeholder="City">
                </div>
                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputzip" class="font-weight-bold pl-2" >Zip Code</label>
                  <input type="text" class="form-control"  name="request_zip" id="requesterZipID" placeholder="Enter Zip Code" onkeypress="isInputnNumber(event)">
                </div>
                </div>
                     <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                 <label for="inputemail" class="font-weight-bold pl-2" >Email</label>
                  <input type="email" class="form-control"  name="request_email" id="requesteremailID" placeholder="email">
                </div>
                 <div class="form-group col-lg-3 col-md-3 col-sm-12">
                 <label for="inputmobile" class="font-weight-bold pl-2" >Mobile Number</label>
                  <input type="text" class="form-control"  name="request_mobilenum" id="requestermobile" placeholder="Mobile Number" onkeypress="isInputnNumber(event)">
                </div>
                  <div class="form-group col-lg-3 col-md-3 col-sm-12">
                 <label for="inputdate" class="font-weight-bold pl-2" >Date</label>
                  <input type="date" class="form-control"  name="request_date" id="requesterdateId" >
                </div>
                </div>

                <button href="#" type="submit" class="btn custom-btn2" name="requesterSubmit">Submit</button>
                  <button href="#" type="submit" class="btn custom-btn2" name="requesterUpdate">Reset</button>
                 
              </form>
               <?php if(isset($msg)) {echo "$msg";}?>
            </div>
            </div>
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
<?php include "../Requester/includes/footer.php"?>