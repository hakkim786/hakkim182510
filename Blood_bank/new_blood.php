<?php 
$link = mysql_connect("localhost", "root", "");
mysql_select_db("bloodbank", $link); 



$qty= $_POST['QTY'];

$requested_grp = $_POST['selectedBloodGroup'];


//echo $requested_grp;
   $result = mysql_query(" select stock from blood_grp where blood_id='$requested_grp';", $link);

 $num_rows = mysql_num_rows($result);

     $row = mysql_fetch_assoc($result);
      
        $s=$row["stock"];
		
        $s=$s+$qty;
 
$result = mysql_query(" update blood_grp set stock='$s' where blood_id='$requested_grp';", $link);
		echo "Updated!!";
	    
?>
