<?php 
$link = mysql_connect("localhost", "root", "");
mysql_select_db("bloodbank", $link); 

$Name= $_POST['NAME'];
$qty=$_POST['QTY'];
$dt=$_POST['DATE'];
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
$flag=0;
$result = mysql_query("SELECT * FROM banks_registeres;", $link);
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["bank_name"];
         
         if($Name==$n)
         { 
           $flag=1;
           echo "Blood bank found!!";
          break;
         }
         
    }
} else {
    echo "0";
}
if($flag==1)
{
$result = mysql_query("SELECT * FROM transaction ;", $link);
//echo "A+ :  ";
$num_rows = mysql_num_rows($result);
$t_id=$num_rows+1;
$flag=0;
$type='s';
 // mysql_query("insert into transaction(Bank/Hospital,blood_id,t_date,type,t_qty,t_id)  values ('{$Name}','{$blood_grp}','{$dt}','{$type}','{$qty}','{$t_id}');", $link);	
$result = mysql_query("insert into transaction(Branch,blood_id,t_date,type,t_qty,t_id) values ('{$Name}','{$blood_grp}','{$dt}','{$type}','{$qty}','{$t_id}');", $link);

 $result = mysql_query(" select stock from blood_grp where blood_id='$blood_grp';", $link);

 $num_rows = mysql_num_rows($result);

     $row = mysql_fetch_assoc($result);
      
        $s=$row["stock"];
		if($qty<$s)
        {
        $s=$s-$qty;
        $result = mysql_query(" update blood_grp set stock='$s' where blood_id='$blood_grp';", $link);
		echo "Blood sold!!";
        }
        else
        {
            echo "Stock is not available!!";
        }

	    



}
else
{
  echo "Blood bank not found!!!Register it first!";
}
?>
