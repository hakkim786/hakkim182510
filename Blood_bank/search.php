<?php 
$link = mysql_connect("localhost", "root", "");
mysql_select_db("bloodbank", $link);

 $requested_grp = $_POST['selectedBloodGroup'];
 $pincode= $_POST['PIN'];


 $result = mysql_query("SELECT * FROM donor where blood_id='$requested_grp' and pincode='$pincode';", $link);

 $num_rows = mysql_num_rows($result);
 if ($num_rows > 0) {
   // output data of each row
     while($row = mysql_fetch_assoc($result))
      {
        $name=$row["d_name"];
        $phone=$row["d_phone"];
        $addr=$row["d_address"];
         echo "<br><p>Name:</p>$name <p>Address:</p>$addr<p>Phone:</p>$phone</br>";
           
       
     }
 }
  else 
 {
    echo "No donors available!!";
 }



?>
