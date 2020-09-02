<?php 
include('config.php');
//Fetching Values from URL  
$Name= $_POST['NAME'];
$add= $_POST['ADD'];
$pin=$_POST['PIN'];
$dob= $_POST['DOB'];
$phone= $_POST['PHONE'];
$email= $_POST['EMAIL'];
//$blood_grp= $_POST['BLOOD_GRP'];
$weight=$_POST['WEIGHT'];
$requested_grp = $_POST['selectedBloodGroup'];
switch($requested_grp) {
  case "A+":
   $blood_grp=1;
  break;
  case "A-":
  $blood_grp=2;
  break;
 case "AB+":
$blood_grp=3;
  break;
   case "AB-":
   $blood_grp=4;
  break;
  case "B+":
   $blood_grp=5;
  break;
  case "B-":
  $blood_grp=6;
  break;
  case "O+":
    $blood_grp=7;
  break;
  case "O-":
  $blood_grp=8;
  break;
  
}
// Establishing connection with server..
	$sql = "insert into donor(d_name,d_dob,d_address,d_phone,d_email,blood_id,d_weight,pincode) values ('{$Name}','{$dob}','{$add}','{$phone}','{$email}','{$blood_grp}','{$weight}','{$pin}')";

    if(mysqli_query($link,$sql))
	      echo "You are registered!!!Welcome to our blood bank!"; 	
?>
