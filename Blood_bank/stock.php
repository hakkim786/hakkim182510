<?php 
$link = mysql_connect("localhost", "root", "");
mysql_select_db("bloodbank", $link);
echo "<center><h1>Stock details</h1></center>";
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='1';", $link);
//echo "A+ :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
         echo "<center><h3><br>A+    :  $n units</br></h3></center>";
       
    }
} else {
    echo "0";
}
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='2';", $link);
//echo "A- :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
        //echo $n;
           echo "<center><h3><br>A-    : $n units</br></h3></center>";
       
    }
} else {
    echo "0";
}

$result = mysql_query("SELECT stock FROM blood_grp where blood_id='3';", $link);
//echo "<br>AB+ :  </br>";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
       // echo $n;
       echo "<center><h3><br>AB+   : $n units</br></h3></center>";
    }
} else {
    echo "0";
}
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='4';", $link);
//echo "AB- :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
           echo "<center><h3><br>AB-    : $n units</br></h3></center>";
       
    }
} else {
    echo "0";
}
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='5';", $link);
//echo "B+ :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
  //      echo $n;
       echo "<center><h3><br>B+    : $n units</br></h3></center>";   
    }
} else {
    echo "0";
}
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='6';", $link);
//echo "\nB- :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
  //      echo $n;
       echo "<center><h3><br>B-    : $n units</br></h3></center>";   
    }
} else {
    echo "0";
}
//echo "$num_rows Rows\n";
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='7';", $link);
//echo "\nB- :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
  //      echo $n;
       echo "<center><h3><br>O+    : $n units</br></h3></center>";   
    }
} else {
    echo "0";
}
$result = mysql_query("SELECT stock FROM blood_grp where blood_id='8';", $link);
//echo "\nB- :  ";
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["stock"];
  //      echo $n;
       echo "<center><h3><br>O-    : $n units</br></h3></center>";   
    }
} else {
    echo "0";
}

?>
	    