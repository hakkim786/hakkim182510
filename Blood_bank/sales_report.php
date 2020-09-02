<?php 
$link = mysql_connect("localhost", "root", "");
mysql_select_db("bloodbank", $link);
echo "<center><h1>Sales Report</h1></center>";
$result = mysql_query("SELECT * FROM transaction where type='s';", $link);
//echo "A+ :  ";
$num_rows = mysql_num_rows($result);
echo "<center> <table border = '1'>
           
<tr>
<td><b>Blood group</b></td><td><b>Blood Bank</b></td><td><b>Date</b></td><td><b>Quantity</b></td><td><b>Price</b></td>
</tr></center>";
if ($num_rows > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result))
     {
        $n=$row["blood_id"];
        $b=$row["Branch"];
        $q=$row["t_qty"];
        $d=$row["t_date"];
        $res=mysql_query("SELECT * FROM blood_grp where blood_id=$n;", $link);
        $r=mysql_fetch_assoc($res);
        $t=$r["blood_grp"];
        $p=$r["price_per_bottle"];
        $p=$p * $q;
         echo "<tr><td> $t   </td><td> $b  </td><td>   $d  </td><td>    $q    </td><td>    $p</td></tr>";
       
    }
} else {
    echo "No sales!!";
}
echo "</table>";
echo "<style> .table{ width=100%;}</style>";   
?>
