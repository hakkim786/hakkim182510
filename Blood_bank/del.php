<?php
include('config.php');
    $phone= $_GET['PHONE'];
    $sql = "DELETE FROM donor where d_phone = '$phone' ";
    if(mysqli_query($link,$sql))	
            echo "Information Deleted";
?>