<!DOCTYPE html>
<html>
<head>
	<title>TABLE GENERATE</title>
	<meta http-equiv="refresh" content="5" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <style type="text/css">
    .box{
      padding: 10px;
      margin-right: 50px;
      margin-left: 50px;
      width:400px;
      
    }
  </style>
</head>
<body >
	
<!-- *************************NAVIGATION BAR ************************* -->
	<div class="navbar navbar-expand-lg navbar-light bg-light-inverse justify-content-center bg-danger">
		<div>
			<img src="McD.png" height=48 width = 48 alt="McDonalds">
		</div>
		<div class="navbar-brand font-italic">  
			<h1>McDonalds</h1>
		</div>
	</div>

	<?php 
	session_start();
	include 'db.php';
	$query = "Select * from custdetails";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$table_query = "SELECT * from custdetails";
    $result = mysqli_query($con,$table_query);
	echo "<form method ='POST'>";
	echo "<br><br><center><div class='navbar-brand font-italic'><h3>Customer Orders</h3></div></center";
	echo " 	<br><table class='table table-striped bg-warning table-bordered table-hover table-sm'>"."<tr>";
	echo "	<tr>	<td>	Order Number 	</td>
					<td>	Date and Time 	</td>
					<td> 	Table Number    </td>
					<td>	Name        	</td>
					<td>	Mobie Number 	</td>
					<td> 	Order Contents	</td>
					<td> 	Payable Amount	</td>

			</tr>";
				
	while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{			
		echo   "<tr>
					<td>".$rows['orderno'].         "</td>
					<td>".$rows['datetime'].        "</td>
					<td>".$rows['TableNo'].         "</td>
					<td>".$rows['name'].            "</td>
					<td>".$rows['mobile_number'].   "</td>
					<td>".$rows['order_contents'].  "</td>
					<td>".$rows['payable_amount'].  "</td>
					
				</tr>";
	}
		 echo "</table>";
	?>
</body>
</html> 


<!-- *************************Copyright *************************
Developer - Pratham Rastogi -->