<?php
session_start();

 $_POST["order_contents"] = $_SESSION["order"];
 $_POST["payable_amount"] = $_SESSION["amount"];

     include_once"db.php";
$sql_query = "INSERT INTO custdetails VALUES (0,CURRENT_TIMESTAMP,1,'$_POST[name]','$_POST[mobile_number]','$_POST[order_contents]','$_POST[payable_amount]')";

if(mysqli_query($con, $sql_query))
{
	include "final.php";
}
else
{
	echo"Data Insertion Failed";
}

?>