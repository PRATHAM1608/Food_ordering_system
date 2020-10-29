<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<title>Confirm Yor Order</title>

  <style type="text/css">
    .box{
      padding: 10px;
      margin-right: 50px;
      margin-left: 50px;
      width:400px;
      
    }
  </style>
</head>
<body>
  <!-- *************************NAVIGATION BAR ************************* -->
  <div class="navbar navbar-expand-lg navbar-light bg-light-inverse justify-content-center bg-danger">
    <div>
      <img src="McD.png" height=48 width = 48 alt="McDonalds">
    </div>
    <div class="navbar-brand font-italic">  
      <h1>McDonalds</h1>
    </div>
  </div>
  <!-- *******************************************************************8 -->
  <center>
  	<form action="Cinsert.php" method="POST">
  	<h1>Confirm Your Order</h1>
  	<fieldset >
  		<div class="box">
  		    
            <div class="row">
            <label for="1 col col-lg-md-sm-2">Name</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <div class="col col-lg-md-sm-10">
  		      <input class="form-control " type="text" value="" name="name" required placeholder="  Enter Your Name" id='1'autocomplete="off"> 
          </div>
          </div>
          <br>
  		    <div class="row">
          
          <label for="2 col col-lg-md-sm-2">Mobile Number</label>
          <div class="col col-lg-md-sm-10">
  		    <input class="form-control " type="Number" value="" name="mobile_number" required placeholder="Enter Your Mobile Number" id='2' autocomplete="off"> 
          </div>
          </div>
          
      </div>
      <br>
  		<h1> Your Order</h1>
      
  		<table class="table table-striped bg-warning table-bordered table-hover table-sm">
  			<tr><th><h1>Contents</h1></th>
     		   <th><h1>Quantity</h1></th>
     		    <th><h1>Price</h1></th>
            </tr>

  		<?php error_reporting(0);
  		      $a1=$_POST["qty1"];  		     
  		      $a2=$_POST["qty2"];  		    
  		      $a3=$_POST["qty3"]; 		   
  		      $a4=$_POST["qty4"];  		     
  		      $a5=$_POST["qty5"]; 		     
  		      $a6=$_POST["qty6"];  		     
  		      $a7=$_POST["qty7"];
  		      $a8=$_POST["qty8"]; 		   
  		      $a9=$_POST["qty9"]; 
  		      $a10=$_POST["qty10"];
  		      $a11=$_POST["qty11"];
  		      $a12=$_POST["qty12"];
  		      $a13=$_POST["qty13"];  
  		      $a14=$_POST["qty14"];
  		      $a15=$_POST["qty15"];
  		      $a16=$_POST["qty16"];
  		      $a17=$_POST["qty17"];
  		      $a18=$_POST["qty18"];
  		      $a19=$_POST["qty19"];
  		      $a20=$_POST["qty20"];
  		      $a21=$_POST["qty21"];  		     
  		      $a22=$_POST["qty22"];  		    
  		      $a23=$_POST["qty23"]; 		   
  		      $a24=$_POST["qty24"];  		     
  		      $a25=$_POST["qty25"]; 		     
  		      $a26=$_POST["qty26"];  		     
  		      $a27=$_POST["qty27"];
  		      $a28=$_POST["qty28"]; 		   
  		      $a29=$_POST["qty29"]; 
  		      $a30=$_POST["qty30"];
  		      $a31=$_POST["qty31"];
  		      $a32=$_POST["qty32"];
  		      $a33=$_POST["qty33"];  
  		      $a34=$_POST["qty34"];
  		      $a35=$_POST["qty35"];
  		      $a36=$_POST["qty36"];
  		      $a37=$_POST["qty37"];
  		      $a38=$_POST["qty38"];
  		      $a39=$_POST["qty39"];
  		      $a40=$_POST["qty40"];
  		      $a41=$_POST["qty41"];  		     
  		      $a42=$_POST["qty42"];  		    
  		      $a43=$_POST["qty43"]; 		   
  		      $a44=$_POST["qty44"];  		     
  		      $a45=$_POST["qty45"]; 		     
  		      $a46=$_POST["qty46"];  		     
  		      $a47=$_POST["qty47"];
  		      $a48=$_POST["qty48"]; 		   
  		      $a49=$_POST["qty49"]; 
  		      $a50=$_POST["qty50"];
  		      $a51=$_POST["qty51"];
  		      $a52=$_POST["qty52"];
  		      $a53=$_POST["qty53"];  
  		      $a54=$_POST["qty54"];
  		      $a55=$_POST["qty55"];
  		      $a56=$_POST["qty56"];
  		      $a57=$_POST["qty57"];
  		      $a58=$_POST["qty58"];
  		      $a59=$_POST["qty59"];
  		      $a60=$_POST["qty60"];
  		      $a61=$_POST["qty61"];  		     
  		      $a62=$_POST["qty62"];  		    
  		      $a63=$_POST["qty63"]; 		   
  		      $a64=$_POST["qty64"];  		     
  		      $a65=$_POST["qty65"]; 		     
  		      $a66=$_POST["qty66"];  		     
  		      $a67=$_POST["qty67"];
            $Ex1=$_POST["EC"];         
            $Ex2=$_POST["ES"];          
            $Ex3=$_POST["ET"];
  		      $t=0; ?>

         <?php if(isset($_POST["cb1"]))
         { $b1=$_POST["cb1"]; ?>
  	      <tr><td> <?php echo $b1; ?></td> 
  	      	<td> <?php echo $a1; ?></td>
  	      	<td> <?php $c1=39*$a1;
  	      	     echo $c1; 
  	      	     $t=$t+$c1;} ?> </td></tr>

  	    <?php if(isset($_POST["cb2"]))
  		{   $b2=$_POST["cb2"]; ?>
  	      <tr><td> <?php echo $b2; ?></td> 
  	      	<td> <?php echo $a2; ?></td>
  	      	<td> <?php $c2=149*$a2;
  	      	     echo $c2;
  	      	     $t=$t+$c2; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb3"]))
  		{   $b3=$_POST["cb3"];?>
  	      <tr><td> <?php echo $b3; ?></td> 
  	      	<td> <?php echo $a3; ?></td>
  	      	<td> <?php $c3=44*$a3;
  	      	     echo $c3;
  	      	     $t=$t+$c3;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb4"]))
  		{  $b4=$_POST["cb4"]; ?>
  	      <tr><td> <?php echo $b4; ?></td> 
  	      	<td> <?php echo $a4; ?></td>
  	      	<td> <?php $c4=154*$a4;
  	      	     echo $c4;
  	      	     $t=$t+$c4;} ?> </td></tr>

  	    <?php if(isset($_POST["cb5"]))
  		{   $b5=$_POST["cb5"];?>
  	      <tr><td> <?php echo $b5; ?></td> 
  	      	<td> <?php echo $a5; ?></td>
  	      	<td> <?php $c5=49*$a5;
  	      	     echo $c5;
  	      	     $t=$t+$c5;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb6"]))
  		{  $b6=$_POST["cb6"]; ?>
  	      <tr><td> <?php echo $b6; ?></td> 
  	      	<td> <?php echo $a6; ?></td>
  	      	<td> <?php $c6=159*$a6;
  	      	     echo $c6;
  	      	     $t=$t+$c6;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb7"]))
  		{   $b7=$_POST["cb7"]; ?>
  	      <tr><td> <?php echo $b7; ?></td> 
  	      	<td> <?php echo $a7; ?></td>
  	      	<td> <?php $c7=79*$a7;
  	      	     echo $c7; 
  	      	     $t=$t+$c7;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb8"]))
  		{  $b8=$_POST["cb8"]; ?>
  	      <tr><td> <?php echo $b8; ?></td> 
  	      	<td> <?php echo $a8; ?></td>
  	      	<td> <?php $c8=189*$a8;
  	      	     echo $c8;
  	      	     $t=$t+$c8;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb9"]))
  		{ $b9=$_POST["cb9"];?>
  	      <tr><td> <?php echo $b9; ?></td> 
  	      	<td> <?php echo $a9; ?></td>
  	      	<td> <?php $c9=99*$a9;
  	      	     echo $c9;
  	      	     $t=$t+$c9;} ?> </td></tr>  

  	      <?php if(isset($_POST["cb10"]))
         { $b10=$_POST["cb10"]; ?>
  	      <tr><td> <?php echo $b10; ?></td> 
  	      	<td> <?php echo $a10; ?></td>
  	      	<td> <?php $c10=209*$a10;
  	      	     echo $c10; 
  	      	     $t=$t+$c10;} ?> </td></tr>

  	    <?php if(isset($_POST["cb11"]))
  		{  $b11=$_POST["cb11"]; ?>
  	      <tr><td> <?php echo $b11; ?></td> 
  	      	<td> <?php echo $a11; ?></td>
  	      	<td> <?php $c11=119*$a11;
  	      	     echo $c11;
  	      	     $t=$t+$c11; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb12"]))
  		{   $b12=$_POST["cb12"];?>
  	      <tr><td> <?php echo $b12; ?></td> 
  	      	<td> <?php echo $a12; ?></td>
  	      	<td> <?php $c12=229*$a12;
  	      	     echo $c12;
  	      	     $t=$t+$c12;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb13"]))
  		{  $b13=$_POST["cb13"]; ?>
  	      <tr><td> <?php echo $b13; ?></td> 
  	      	<td> <?php echo $a13; ?></td>
  	      	<td> <?php $c13=139*$a13;
  	      	     echo $c13;
  	      	     $t=$t+$c13;} ?> </td></tr>

  	    <?php if(isset($_POST["cb14"]))
  		{   $b14=$_POST["cb14"];?>
  	      <tr><td> <?php echo $b14; ?></td> 
  	      	<td> <?php echo $a14; ?></td>
  	      	<td> <?php $c14=249*$a14;
  	      	     echo $c14;
  	      	     $t=$t+$c14;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb15"]))
  		{  $b15=$_POST["cb15"]; ?>
  	      <tr><td> <?php echo $b15; ?></td> 
  	      	<td> <?php echo $a15; ?></td>
  	      	<td> <?php $c15=149*$a15;
  	      	     echo $c15;
  	      	     $t=$t+$c15;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb16"]))
  		{   $b16=$_POST["cb16"]; ?>
  	      <tr><td> <?php echo $b16; ?></td> 
  	      	<td> <?php echo $a16; ?></td>
  	      	<td> <?php $c16=259*$a16;
  	      	     echo $c16; 
  	      	     $t=$t+$c16;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb17"]))
  		{  $b17=$_POST["cb17"]; ?>
  	      <tr><td> <?php echo $b17; ?></td> 
  	      	<td> <?php echo $a17; ?></td>
  	      	<td> <?php $c17=159*$a17;
  	      	     echo $c17;
  	      	     $t=$t+$c17;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb18"]))
  		{ $b18=$_POST["cb18"];?>
  	      <tr><td> <?php echo $b18; ?></td> 
  	      	<td> <?php echo $a18; ?></td>
  	      	<td> <?php $c18=269*$a18;
  	      	     echo $c18;
  	      	     $t=$t+$c18;} ?> </td></tr> 

  	     <?php if(isset($_POST["cb19"]))
         { $b19=$_POST["cb19"]; ?>
  	      <tr><td> <?php echo $b19; ?></td> 
  	      	<td> <?php echo $a19; ?></td>
  	      	<td> <?php $c19=169*$a19;
  	      	     echo $c19; 
  	      	     $t=$t+$c19;} ?> </td></tr>

  	    <?php if(isset($_POST["cb20"]))
  		{   $b20=$_POST["cb20"]; ?>
  	      <tr><td> <?php echo $b20; ?></td> 
  	      	<td> <?php echo $a20; ?></td>
  	      	<td> <?php $c20=279*$a20;
  	      	     echo $c20;
  	      	     $t=$t+$c20; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb21"]))
  		{   $b21=$_POST["cb21"];?>
  	      <tr><td> <?php echo $b21; ?></td> 
  	      	<td> <?php echo $a21; ?></td>
  	      	<td> <?php $c21=29*$a21;
  	      	     echo $c21;
  	      	     $t=$t+$c21;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb22"]))
  		{  $b22=$_POST["cb22"]; ?>
  	      <tr><td> <?php echo $b22; ?></td> 
  	      	<td> <?php echo $a22; ?></td>
  	      	<td> <?php $c22=65*$a22;
  	      	     echo $c22;
  	      	     $t=$t+$c22;} ?> </td></tr>

  	    <?php if(isset($_POST["cb23"]))
  		{   $b23=$_POST["cb23"];?>
  	      <tr><td> <?php echo $b23; ?></td> 
  	      	<td> <?php echo $a23; ?></td>
  	      	<td> <?php $c23=75*$a23;
  	      	     echo $c23;
  	      	     $t=$t+$c23;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb24"]))
  		{  $b24=$_POST["cb24"]; ?>
  	      <tr><td> <?php echo $b24; ?></td> 
  	      	<td> <?php echo $a24; ?></td>
  	      	<td> <?php $c24=85*$a24;
  	      	     echo $c24;
  	      	     $t=$t+$c24;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb25"]))
  		{   $b25=$_POST["cb25"]; ?>
  	      <tr><td> <?php echo $b25; ?></td> 
  	      	<td> <?php echo $a25; ?></td>
  	      	<td> <?php $c25=61*$a25;
  	      	     echo $c25; 
  	      	     $t=$t+$c25;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb26"]))
  		{  $b26=$_POST["cb26"]; ?>
  	      <tr><td> <?php echo $b26; ?></td> 
  	      	<td> <?php echo $a26; ?></td>
  	      	<td> <?php $c26=171*$a26;
  	      	     echo $c26;
  	      	     $t=$t+$c26;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb27"]))
  		{ $b27=$_POST["cb27"];?>
  	      <tr><td> <?php echo $b27; ?></td> 
  	      	<td> <?php echo $a27; ?></td>
  	      	<td> <?php $c27=63*$a27;
  	      	     echo $c27;
  	      	     $t=$t+$c27;} ?> </td></tr> 

  	     <?php if(isset($_POST["cb28"]))
         { $b28=$_POST["cb28"]; ?>
  	      <tr><td> <?php echo $b28; ?></td> 
  	      	<td> <?php echo $a28; ?></td>
  	      	<td> <?php $c28=173*$a28;
  	      	     echo $c28; 
  	      	     $t=$t+$c28;} ?> </td></tr>

  	    <?php if(isset($_POST["cb29"]))
  		{   $b29=$_POST["cb29"]; ?>
  	      <tr><td> <?php echo $b29; ?></td> 
  	      	<td> <?php echo $a29; ?></td>
  	      	<td> <?php $c29=69*$a29;
  	      	     echo $c29;
  	      	     $t=$t+$c29; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb30"]))
  		{   $b30=$_POST["cb30"];?>
  	      <tr><td> <?php echo $b30; ?></td> 
  	      	<td> <?php echo $a30; ?></td>
  	      	<td> <?php $c30=179*$a30;
  	      	     echo $c30;
  	      	     $t=$t+$c30;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb31"]))
  		{  $b31=$_POST["cb31"]; ?>
  	      <tr><td> <?php echo $b31; ?></td> 
  	      	<td> <?php echo $a31; ?></td>
  	      	<td> <?php $c31=169*$a31;
  	      	     echo $c31;
  	      	     $t=$t+$c31;} ?> </td></tr>

  	    <?php if(isset($_POST["cb32"]))
  		{   $b32=$_POST["cb32"];?>
  	      <tr><td> <?php echo $b32; ?></td> 
  	      	<td> <?php echo $a32; ?></td>
  	      	<td> <?php $c32=279*$a32;
  	      	     echo $c32;
  	      	     $t=$t+$c32;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb33"]))
  		{  $b33=$_POST["cb33"]; ?>
  	      <tr><td> <?php echo $b33; ?></td> 
  	      	<td> <?php echo $a33; ?></td>
  	      	<td> <?php $c33=179*$a33;
  	      	     echo $c33;
  	      	     $t=$t+$c33;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb34"]))
  		{   $b34=$_POST["cb34"]; ?>
  	      <tr><td> <?php echo $b34; ?></td> 
  	      	<td> <?php echo $a34; ?></td>
  	      	<td> <?php $c34=289*$a34;
  	      	     echo $c34; 
  	      	     $t=$t+$c34;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb35"]))
  		{  $b35=$_POST["cb35"]; ?>
  	      <tr><td> <?php echo $b35; ?></td> 
  	      	<td> <?php echo $a35; ?></td>
  	      	<td> <?php $c35=114*$a35;
  	      	     echo $c35;
  	      	     $t=$t+$c35;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb36"]))
  		{ $b36=$_POST["cb36"];?>
  	      <tr><td> <?php echo $b36; ?></td> 
  	      	<td> <?php echo $a36; ?></td>
  	      	<td> <?php $c36=224*$a36;
  	      	     echo $c36;
  	      	     $t=$t+$c36;} ?> </td></tr> 

  	    <?php if(isset($_POST["cb37"]))
         { $b37=$_POST["cb37"]; ?>
  	      <tr><td> <?php echo $b37; ?></td> 
  	      	<td> <?php echo $a37; ?></td>
  	      	<td> <?php $c37=144*$a37;
  	      	     echo $c37; 
  	      	     $t=$t+$c37;} ?> </td></tr>

  	    <?php if(isset($_POST["cb38"]))
  		{   $b38=$_POST["cb38"]; ?>
  	      <tr><td> <?php echo $b38; ?></td> 
  	      	<td> <?php echo $a38; ?></td>
  	      	<td> <?php $c38=254*$a38;
  	      	     echo $c38;
  	      	     $t=$t+$c38; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb39"]))
  		{   $b39=$_POST["cb39"];?>
  	      <tr><td> <?php echo $b39; ?></td> 
  	      	<td> <?php echo $a39; ?></td>
  	      	<td> <?php $c39=290*$a39;
  	      	     echo $c39;
  	      	     $t=$t+$c39;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb40"]))
  		{  $b40=$_POST["cb40"]; ?>
  	      <tr><td> <?php echo $b40; ?></td> 
  	      	<td> <?php echo $a40; ?></td>
  	      	<td> <?php $c40=65*$a40;
  	      	     echo $c40;
  	      	     $t=$t+$c40;} ?> </td></tr>

  	    <?php if(isset($_POST["cb41"]))
  		{   $b41=$_POST["cb41"];?>
  	      <tr><td> <?php echo $b41; ?></td> 
  	      	<td> <?php echo $a41; ?></td>
  	      	<td> <?php $c41=75*$a41;
  	      	     echo $c41;
  	      	     $t=$t+$c41;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb42"]))
  		{  $b42=$_POST["cb42"]; ?>
  	      <tr><td> <?php echo $b42; ?></td> 
  	      	<td> <?php echo $a42; ?></td>
  	      	<td> <?php $c42=65*$a42;
  	      	     echo $c42;
  	      	     $t=$t+$c42;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb43"]))
  		{   $b43=$_POST["cb43"]; ?>
  	      <tr><td> <?php echo $b43; ?></td> 
  	      	<td> <?php echo $a43; ?></td>
  	      	<td> <?php $c43=75*$a43;
  	      	     echo $c43; 
  	      	     $t=$t+$c43;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb44"]))
  		{  $b44=$_POST["cb44"]; ?>
  	      <tr><td> <?php echo $b44; ?></td> 
  	      	<td> <?php echo $a44; ?></td>
  	      	<td> <?php $c44=65*$a44;
  	      	     echo $c44;
  	      	     $t=$t+$c44;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb45"]))
  		{ $b45=$_POST["cb45"];?>
  	      <tr><td> <?php echo $b45; ?></td> 
  	      	<td> <?php echo $a45; ?></td>
  	      	<td> <?php $c45=75*$a45;
  	      	     echo $c45;
  	      	     $t=$t+$c45;} ?> </td></tr> 

  	     <?php if(isset($_POST["cb46"]))
         { $b46=$_POST["cb46"]; ?>
  	      <tr><td> <?php echo $b46; ?></td> 
  	      	<td> <?php echo $a46; ?></td>
  	      	<td> <?php $c46=55*$a46;
  	      	     echo $c46; 
  	      	     $t=$t+$c46;} ?> </td></tr>

  	    <?php if(isset($_POST["cb47"]))
  		{   $b47=$_POST["cb47"]; ?>
  	      <tr><td> <?php echo $b47; ?></td> 
  	      	<td> <?php echo $a47; ?></td>
  	      	<td> <?php $c47=60*$a47;
  	      	     echo $c47;
  	      	     $t=$t+$c47; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb48"]))
  		{   $b48=$_POST["cb48"];?>
  	      <tr><td> <?php echo $b48; ?></td> 
  	      	<td> <?php echo $a48; ?></td>
  	      	<td> <?php $c48=35*$a48;
  	      	     echo $c48;
  	      	     $t=$t+$c48;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb49"]))
  		{  $b49=$_POST["cb49"]; ?>
  	      <tr><td> <?php echo $b49; ?></td> 
  	      	<td> <?php echo $a49; ?></td>
  	      	<td> <?php $c49=39*$a49;
  	      	     echo $c49;
  	      	     $t=$t+$c49;} ?> </td></tr>

  	    <?php if(isset($_POST["cb50"]))
  		{   $b50=$_POST["cb50"];?>
  	      <tr><td> <?php echo $b50; ?></td> 
  	      	<td> <?php echo $a50; ?></td>
  	      	<td> <?php $c50=44*$a50;
  	      	     echo $c50;
  	      	     $t=$t+$c50;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb51"]))
  		{  $b51=$_POST["cb51"]; ?>
  	      <tr><td> <?php echo $b51; ?></td> 
  	      	<td> <?php echo $a51; ?></td>
  	      	<td> <?php $c51=59*$a51;
  	      	     echo $c51;
  	      	     $t=$t+$c51;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb52"]))
  		{   $b52=$_POST["cb52"]; ?>
  	      <tr><td> <?php echo $b52; ?></td> 
  	      	<td> <?php echo $a52; ?></td>
  	      	<td> <?php $c52=64*$a52;
  	      	     echo $c52; 
  	      	     $t=$t+$c52;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb53"]))
  		{  $b53=$_POST["cb53"]; ?>
  	      <tr><td> <?php echo $b53; ?></td> 
  	      	<td> <?php echo $a53; ?></td>
  	      	<td> <?php $c53=20*$a53;
  	      	     echo $c53;
  	      	     $t=$t+$c53;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb54"]))
  		{ $b54=$_POST["cb54"];?>
  	      <tr><td> <?php echo $b54; ?></td> 
  	      	<td> <?php echo $a54; ?></td>
  	      	<td> <?php $c54=65*$a54;
  	      	     echo $c54;
  	      	     $t=$t+$c54;} ?> </td></tr> 

  	    <?php if(isset($_POST["cb55"]))
         { $b55=$_POST["cb55"]; ?>
  	      <tr><td> <?php echo $b55; ?></td> 
  	      	<td> <?php echo $a55; ?></td>
  	      	<td> <?php $c55=85*$a55;
  	      	     echo $c55; 
  	      	     $t=$t+$c55;} ?> </td></tr>

  	    <?php if(isset($_POST["cb56"]))
  		{   $b56=$_POST["cb56"]; ?>
  	      <tr><td> <?php echo $b56; ?></td> 
  	      	<td> <?php echo $a56; ?></td>
  	      	<td> <?php $c56=60*$a56;
  	      	     echo $c56;
  	      	     $t=$t+$c56; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb57"]))
  		{   $b57=$_POST["cb57"];?>
  	      <tr><td> <?php echo $b57; ?></td> 
  	      	<td> <?php echo $a57; ?></td>
  	      	<td> <?php $c57=77*$a57;
  	      	     echo $c57;
  	      	     $t=$t+$c57;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb58"]))
  		{  $b58=$_POST["cb58"]; ?>
  	      <tr><td> <?php echo $b58; ?></td> 
  	      	<td> <?php echo $a58; ?></td>
  	      	<td> <?php $c58=65*$a58;
  	      	     echo $c58;
  	      	     $t=$t+$c58;} ?> </td></tr>

  	    <?php if(isset($_POST["cb59"]))
  		{   $b59=$_POST["cb59"];?>
  	      <tr><td> <?php echo $b59; ?></td> 
  	      	<td> <?php echo $a59; ?></td>
  	      	<td> <?php $c59=65*$a59;
  	      	     echo $c59;
  	      	     $t=$t+$c59;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb60"]))
  		{  $b60=$_POST["cb60"]; ?>
  	      <tr><td> <?php echo $b60; ?></td> 
  	      	<td> <?php echo $a60; ?></td>
  	      	<td> <?php $c60=79*$a60;
  	      	     echo $c60;
  	      	     $t=$t+$c60;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb61"]))
  		{   $b61=$_POST["cb61"]; ?>
  	      <tr><td> <?php echo $b61; ?></td> 
  	      	<td> <?php echo $a61; ?></td>
  	      	<td> <?php $c61=20*$a61;
  	      	     echo $c61; 
  	      	     $t=$t+$c61;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb62"]))
  		{  $b62=$_POST["cb62"]; ?>
  	      <tr><td> <?php echo $b62; ?></td> 
  	      	<td> <?php echo $a62; ?></td>
  	      	<td> <?php $c62=15*$a62;
  	      	     echo $c62;
  	      	     $t=$t+$c62;} ?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb63"]))
  		{ $b63=$_POST["cb63"];?>
  	      <tr><td> <?php echo $b63.$Ex1; ?></td> 
  	      	<td> <?php echo $a63; ?></td>
  	      	<td> <?php $c63=17*$a63;
  	      	     echo $c63;
  	      	     $t=$t+$c63;} ?> </td></tr> 

  	     <?php if(isset($_POST["cb64"]))
         { $b64=$_POST["cb64"]; ?>
  	      <tr><td> <?php echo $b64.$Ex2; ?></td> 
  	      	<td> <?php echo $a64; ?></td>
  	      	<td> <?php $c64=15*$a64;
  	      	     echo $c64; 
  	      	     $t=$t+$c64;} ?> </td></tr>

  	    <?php if(isset($_POST["cb65"]))
  		{   $b65=$_POST["cb65"]; ?>
  	      <tr><td> <?php echo $b65.$Ex3; ?></td> 
  	      	<td> <?php echo $a65; ?></td>
  	      	<td> <?php $c65=15*$a65;
  	      	     echo $c65;
  	      	     $t=$t+$c65; }?> </td></tr>
  	      	     
  	    <?php if(isset($_POST["cb66"]))
  		{   $b66=$_POST["cb66"];?>
  	      <tr><td> <?php echo $b66; ?></td> 
  	      	<td> <?php echo $a66; ?></td>
  	      	<td> <?php $c66=1*$a66;
  	      	     echo $c66;
  	      	     $t=$t+$c66;} ?> </td></tr>
  	    
  	    <?php if(isset($_POST["cb67"]))
  		{  $b67=$_POST["cb67"]; ?>
  	      <tr><td> <?php echo $b67; ?></td> 
  	      	<td> <?php echo $a67; ?></td>
  	      	<td> <?php $c67=1*$a67;
  	      	     echo $c67;
  	      	     $t=$t+$c67;} ?> </td></tr>
           </table> <br>
           <?php $sg=$t*2.5/100;
                 $cg=$t*2.5/100; 
                 $fa=$t+$cg+$sg; 
           ?>
            <table class="table table-striped bg-warning table-bordered table-hover table-sm">
            	<tr><td>Total Amount : </td> <td><?php echo $t; ?></td></tr>
            	<tr><td>SGST : </td> <td><?php echo $sg; ?></td></tr>
            	<tr><td>CGST : </td> <td><?php echo $cg; ?></td></tr>
            	<tr><td>Amount to be paid: </td> <td><?php echo $fa; ?></td></tr>
            </table><br>
              <?php 
     $h = $b1.$a1.$b2.$a2.$b3.$a3.$b4.$a4.$b5.$a5.$b6.$a6.$b7.$a7.$b8.$a8.$b9.$a9.$b10.$a10
        .$b11.$a11.$b12.$a12.$b13.$a13.$b14.$a14.$b15.$a15.$b16.$a16.$b17.$a17.$b18.$a18.$b19.$a19.$b20.$a20
        .$b21.$a21.$b22.$a22.$b23.$a23.$b24.$a24.$b25.$a25.$b26.$a26.$b27.$a27.$b28.$a28.$b29.$a29.$b30.$a30
        .$b31.$a31.$b32.$a32.$b33.$a33.$b34.$a34.$b35.$a35.$b36.$a36.$b37.$a37.$b38.$a38.$b39.$a39.$b40.$a40
        .$b41.$a41.$b42.$a42.$b43.$a43.$b44.$a44.$b45.$a45.$b46.$a46.$b47.$a47.$b48.$a48.$b49.$a49.$b50.$a50
        .$b51.$a51.$b52.$a52.$b53.$a53.$b54.$a54.$b55.$a55.$b56.$a56.$b57.$a57.$b58.$a58.$b59.$a59.$b60.$a60
        .$b61.$a61.$b62.$a62.$b63.$a63.$Ex1.$b64.$a64.$Ex2.$b65.$a65.$Ex3.$b66.$a66.$b67.$a67; 
            $_SESSION["order"] = $h;
            $_SESSION["amount"] = $fa;
            ?>
            <input class="btn btn-primary" type="submit" value="Confirm Your Order">
  	</fieldset>
  </form>
  </center>
</body>
</html>