<?php 
$link = mysql_connect("localhost", "root", "");
mysql_select_db("bloodb_db", $link);

//Fetching Values from URL  

// Establishing connection with server..
$requested_grp = $_POST['selectedBloodGroup'];
switch($requested_grp) {
  case "AB+":
    $result = mysql_query("SELECT * FROM blood where b_name='AB+'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
  case "AB-":
  
        $result = mysql_query("SELECT * FROM blood b_name='AB-'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
 case "A+":
    $result = mysql_query("SELECT * FROM blood b_name='A+'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
   case "A-":
    $result = mysql_query("SELECT * FROM blood b_name='A-'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
  case "B+":
    $result = mysql_query("SELECT * FROM blood b_name='B+'", $link);

$num_rows = mysql_num_rows($result);
if($num_rows>0)
echo "$num_rows Rows\n";
else
    echo " 0 rows";
  break;
  case "B-":
    $result = mysql_query("SELECT * FROM blood b_name='B-'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
  case "O+":
    $result = mysql_query("SELECT * FROM blood b_name='O+'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
  case "O-":
    $result = mysql_query("SELECT * FROM blood b_name='O-'", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";
  break;
  default :
  echo "No page was selected";
  break;
}
   
   // $result = mysql_query("SELECT * FROM blood where b_name='$Name'", $link);
//$num_rows = mysql_num_rows($result);

//echo "$num_rows Rows\n";

?>
