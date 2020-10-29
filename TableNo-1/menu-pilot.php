<?php
session_start();
?>

<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style type="text/css">
		table{
			background-image: url("2.jpeg"); 
		    background-repeat: repeat;
            background-position: right top;
            background-attachment: fixed;
		    
		}
	</style>
</head>
<body class="bg-warning">
	
<!-- *************************NAVIGATION BAR ************************* -->
	<div class="navbar navbar-expand-lg navbar-light bg-light-inverse justify-content-center bg-danger">
		<div>
			<img src="McD.png" height=48 width = 48 alt="McDonalds">
		</div>
		<div class="navbar-brand font-italic">  
			<h1>McDonalds</h1>
		</div>
	</div>
<!-- ***********************BODY CONTAINER****************************** -->
	<div class="container bg-warning">
		<form action="bill.php" method ="post">
			<div class="row justify-content-center">
				<div class="col-xl-lg-md-sm-12">
					<h1 class="display-5">MENU</h1> 
				</div>
			</div>

			<div class="container justify-content-center">
				<!-- ********************************************* MC -BITES ************************************** -->
				<h1 class="display-6">Mc Bite</h1>

				<table class="table table-striped table-dark table-bordered table-hover table-sm">
					<thead class="thread-dark"><th><h1>Contents</h1></th>
					   <th><h1>Quantity</h1></th>
					    <th><h1>Price</h1></th>
			        </thead>
				    </tr>
				            <td><input type="checkbox" name="cb1" value="McAloo Tikki">McAloo Tikki</td>
				            <td><input type="number" value="" name="qty1" placeholder="Quantity" autocomplete="off"></td>
				        <td>39*</td> 
				    </tr>
				     <tr>
				            <td><input type="checkbox" name="cb2" value="McAloo Tikki-Meal">McAloo Tikki-Meal</td>
				            <td><input type="number" value="" name="qty2" placeholder="Quantity" autocomplete="off"></td>
				        <td>149*</td> 
				    </tr> 
				    <tr>
				        <td><input type="checkbox" name="cb3" value="McEgg">McEgg</td>
				        <td><input type="number" value="" name="qty3"  name="" placeholder="Quantity" autocomplete="off"></td>
				        <td>44*</td>
				    </tr> 
				     <tr>
				        <td><input type="checkbox" name="cb4" value="McEgg-Meal">McEgg-Meal</td>
				        <td><input type="number" value="" name="qty4"  name="" placeholder="Quantity" autocomplete="off"></td>
				        <td>154*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb5" value="Chicken McGrill"> Chicken McGrill</td>
				        <td><input type="number" value="" name="qty5"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>49*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb6" value="Chicken McGrill-Meal"> Chicken McGrill-Meal</td>
				        <td><input type="number" value="" name="qty6"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>159*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb7" value="McVeggie"> McVeggie</td>
				        <td><input type="number" value="" name="qty7"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>79*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb8" value="McVeggie-Meal"> McVeggie-Meal</td>
				        <td><input type="number" value="" name="qty8"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>189*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb9" value="McChicken"> McChicken</td>
				        <td><input type="number" value="" name="qty9"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>99*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb10" value="McChicken-Meal"> McChicken-Meal</td>
				        <td><input type="number" value="" name="qty10"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>209*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb11" value="Fillet-O-Fish"> Fillet-O-Fish</td>
				        <td><input type="number" value="" name="qty11"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>119*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb12" value="Fillet-O-Fish-Meal"> Fillet-O-Fish-Meal</td>
				        <td><input type="number" value="" name="qty12"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>229*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb13" value="McSpicy Paneer"> McSpicy Paneer</td>
				        <td><input type="number" value="" name="qty13"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>139*</td>
				    </tr>
				       <tr>
				        <td><input type="checkbox" name="cb14" value="McSpicy Paneer-Meal"> McSpicy Paneer-Meal</td>
				        <td><input type="number" value="" name="qty14"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>249*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb15" value="McSpicy Chicken">McSpicy Chicken</td>
				        <td><input type="number" value="" name="qty15"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>149*</td>
				    </tr>
				      <tr>
				        <td><input type="checkbox" name="cb16" value="McSpicy Chicken-Meal">McSpicy Chicken-Meal</td>
				        <td><input type="number" value="" name="qty16"  name=""  placeholder="Quantity" autocomplete="off"></td>
				        <td>259*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb17" value="Veg Maharaja Mac">Veg Maharaja Mac</td>
				        <td><input type="number" value="" name="qty17"  name="" placeholder="Quantity" autocomplete="off"></td>
				        <td>159*</td>
				    </tr>
				      <tr>
				        <td><input type="checkbox" name="cb18" value="Veg Maharaja Mac-Meal">Veg Maharaja Mac-Meal</td>
				        <td><input type="number" value="" name="qty18"  name="" placeholder="Quantity" autocomplete="off"></td>
				        <td>269*</td>
				    </tr>
				     <tr>
				        <td><input type="checkbox" name="cb19" value="Chicken Maharaja Mac">Chicken Maharaja Mac</td>
				        <td><input type="number" value="" name="qty19"  name="" placeholder="Quantity" autocomplete="off"></td>
				        <td>169*</td>
				    </tr>
				     <tr>
				     <td><input type="checkbox" name="cb20" value="Chicken Maharaja Mac-Meal">Chicken Maharaja Mac-Meal</td>
				        <td><input type="number" value="" name="qty20"  name="" placeholder="Quantity" autocomplete="off"></td>
				        <td>279*</td>
				    </tr>
	    		</table>
	    		<!-- ****************************************************** SIDES AND WRAPS **************************************************** -->
	    		<h1 class="display-6">SIDES & WRAPS</h1>
	            <table class="table table-striped table-dark table-bordered table-hover table-sm">
	             <tr>
	                  <td><input type="checkbox" name="cb21" value="Veg Pizza McPuff">Veg Pizza McPuff</td>
	                    <td><input type="number" value="" name="qty21" placeholder="Quantity" autocomplete="off"></td>
	                <td>29*</td> 
	            </tr>
	             <tr>
	                    <td><input type="checkbox" name="cb22" value="French Fries-SMALL">French Fries-SMALL</td>
	                    <td><input type="number" value="" name="qty22" placeholder="Quantity" autocomplete="off"></td>
	                <td>65*</td> 
	            </tr> 
	            <tr>
	                <td><input type="checkbox" name="cb23" value="French Fries-MEDIUM">French Fries-MEDIUM</td>
	                <td><input type="number" value="" name="qty23"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>75*</td>
	            </tr> 
	             <tr>
	                <td><input type="checkbox" name="cb24" value="French Fries-LARGE">French Fries-LARGE</td>
	                <td><input type="number" value="" name="qty24"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>85*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb25" value="Aloo Wrap">Aloo Wrap</td>
	                <td><input type="number" value="" name="qty25"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>61*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb26" value="Aloo Wrap-Meal"> Aloo Wrap-Meal</td>
	                <td><input type="number" value="" name="qty26"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>171*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb27" value="Egg Wrap"> Egg Wrap</td>
	                <td><input type="number" value="" name="qty27"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>63*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb28" value="Egg Wrap-Meal"> Egg Wrap-Meal</td>
	                <td><input type="number" value="" name="qty28"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>173*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb29" value="Grilled Chicken Wrap"> Grilled Chicken Wrap</td>
	                <td><input type="number" value="" name="qty29"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>69*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb30" value="Grilled Chicken Wrap-Meal"> Grilled Chicken Wrap-Meal</td>
	                <td><input type="number" value="" name="qty30"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>179*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb31" value="BIG Spicy Paneer Wrap"> BIG Spicy Paneer Wrap</td>
	                <td><input type="number" value="" name="qty31"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>169*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb32" value="BIG Spicy Paneer Wrap-Meal"> BIG Spicy Paneer Wrap-Meal</td>
	                <td><input type="number" value="" name="qty32"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>279*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb33" value="BIG Spicy Chicken Wrap"> BIG Spicy Chicken Wrap</td>
	                <td><input type="number" value="" name="qty33"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>179*</td>
	            </tr>
	               <tr>
	              <td><input type="checkbox" name="cb34" value="BIG Spicy Chicken Wrap-Meal"> BIG Spicy Chicken Wrap-Meal</td>
	                <td><input type="number" value="" name="qty34"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>289*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb35" value="Chicken Nuggets(8pcs)">Chicken Nuggets(8pcs)</td>
	                <td><input type="number" value="" name="qty35"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>114*</td>
	            </tr>
	              <tr>
	                <td><input type="checkbox" name="cb36" value="Chicken Nuggets(8pcs)-Meal">Chicken Nuggets(8pcs)-Meal</td>
	                <td><input type="number" value="" name="qty36"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>224*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb37" value="Chicken Nuggets(10pcs)">Chicken Nuggets(10pcs)</td>
	                <td><input type="number" value="" name="qty37"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>144*</td>
	            </tr>
	              <tr>
	                <td><input type="checkbox" name="cb38" value="Chicken Nuggets(10pcs)-Meal">Chicken Nuggets(10pcs)-Meal</td>
	                <td><input type="number" value="" name="qty38"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>254*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb39" value="Chicken Nuggets(20pcs)"> Chicken Nuggets(20pcs)</td>
	                <td><input type="number" value="" name="qty39"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>290*</td>
	            </tr>
	           </table>

	           <!-- ***********************************************  BEVERAGES ********************************************************-->
				<h1 class="display-6">BEVERAGES</h1>
	           <table class="table table-striped table-dark table-bordered table-hover table-sm">
	                <tr>
	            		<td><input type="checkbox" name="cb40" value="CocaCola-Medium">CocaCola-Medium</td>
	                    <td><input type="number" value="" name="qty40" placeholder="Quantity" autocomplete="off"></td>
	                	<td>65*</td> 
	            	</tr>
			         <tr>
			                <td><input type="checkbox" name="cb41" value="CocaCola-Large">CocaCola-Large</td>
			                <td><input type="number" value="" name="qty41" placeholder="Quantity" autocomplete="off"></td>
			            <td>75*</td> 
			        </tr> 
			        <tr>
			            <td><input type="checkbox" name="cb42" value="Fanta-Medium">Fanta-Medium</td>
			            <td><input type="number" value="" name="qty42"  name="" placeholder="Quantity" autocomplete="off"></td>
			            <td>65*</td>
			        </tr> 
			         <tr>
			            <td><input type="checkbox" name="cb43" value="Fanta-Large">Fanta-Large</td>
			            <td><input type="number" value="" name="qty43"  name="" placeholder="Quantity" autocomplete="off"></td>
			            <td>75*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb44" value="Sprite-Medium"> Sprite-Medium</td>
			            <td><input type="number" value="" name="qty44"  name=""  placeholder="Quantity"></td>
			            <td>65*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb45" value="Sprite-Large"> Sprite-Large</td>
			            <td><input type="number" value="" name="qty45"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>75*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb46" value="Ice Tea"> Ice Tea</td>
			            <td><input type="number" value="" name="qty46"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>55*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb47" value="Cold Coffee"> Cold Coffee</td>
			            <td><input type="number" value="" name="qty47"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>60*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb48" value="Coke Zero(330ml)">Coke Zero</td>
			            <td><input type="number" value="" name="qty48"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>35*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb49" value="Black Tea"> Black Tea</td>
			            <td><input type="number" value="" name="qty49"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>39*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb50" value="Hot Tea"> Hot Tea</td>
			            <td><input type="number" value="" name="qty50"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>44*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb51" value="Black Coffee"> Black Coffee</td>
			            <td><input type="number" value="" name="qty51"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>59*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb52" value="Fresh Brew Coffee"> Fresh Brew Coffee</td>
			            <td><input type="number" value="" name="qty52"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>64*</td>
			        </tr>
			           <tr>
			               <td><input type="checkbox" name="cb53" value="Schweppes(500ml) (Packaged Drinking Water)">Schweppes(500ml) (Packaged Drinking Water)</td>
			            <td><input type="number" value="" name="qty53"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>20*</td>
			        </tr>
			        <tr>
			            <td>McFlurry</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb54" value="Black Forest-Small"> Black Forest-Small</td>
			            <td><input type="number" value="" name="qty54"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>65*</td>
			        </tr>
			          <tr>
			            <td><input type="checkbox" name="cb55" value="Black Forest-Regular">Black Forest-Regular</td>
			            <td><input type="number" value="" name="qty55"  name=""  placeholder="Quantity" autocomplete="off"></td>
			            <td>85*</td>
			        </tr>
			         <tr>
			            <td><input type="checkbox" name="cb56" value="Choco Crunch-Small">Choco Crunch-Small</td>
			            <td><input type="number" value="" name="qty56"  name="" placeholder="Quantity" autocomplete="off"></td>
			            <td>60*</td>
			        </tr>
			          <tr>
			            <td><input type="checkbox" name="cb57" value="Choco Crunch-Regular">Choco Crunch-Regular</td>
			            <td><input type="number" value="" name="qty57"  name="" placeholder="Quantity" autocomplete="off"></td>
			            <td>77*</td>
			        </tr>
	           </table>		
	           <!-- ******************************************************** DESERT AND EXTRA *********************************************** -->

	           <h1 class="display-6">DESERTS & EXTRAS</h1>
	           <table class="table table-striped table-dark table-bordered table-hover table-sm">
	            <tr>
	                <td>Soft Serve</td>
	            </tr>
	                <tr>
	                    <td><input type="checkbox" name="cb58" value="Chocolate">Chocolate</td>
	                    <td><input type="number" value="" name="qty58" placeholder="Quantity" autocomplete="off"></td>
	                <td>65*</td> 
	            </tr>
	             <tr>
	                    <td><input type="checkbox" name="cb59" value="Strawberry"> Strawberry</td>
	                    <td><input type="number" value="" name="qty59" placeholder="Quantity" autocomplete="off"></td>
	                <td>65*</td> 
	            </tr> 
	            <tr>
	                <td><input type="checkbox" name="cb60" value="Chocolate Brownie"> Chocolate Brownie</td>
	                <td><input type="number" value="" name="qty60"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>79*</td>
	            </tr> 
	             <tr>
	                <td><input type="checkbox" name="cb61" value="Extra McFlurry Toppings"> Extra McFlurry Toppings</td>
	                <td><input type="number" value="" name="qty61"  name="" placeholder="Quantity" autocomplete="off"></td>
	                <td>20*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb62" value="Extra McNuggets Dip"> Extra McNuggets Dip</td>
	                <td><input type="number" value="" name="qty62"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>15*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb63" value="Extra Cheese"> Extra Cheese
	                 <input type="text" name="EC" value="" placeholder="In Which Content"></td>
	                <td><input type="number" value="" name="qty63"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>17*</td>
	            </tr>
	               <tr>
	                <td><input type="checkbox" name="cb64" value="Extra Sauce"> Extra Sauce
	                 <input type="text" name="ES" value="" placeholder="In Which Content"></td>
	                <td><input type="number" value="" name="qty64"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>15*</td>
	            </tr>   <tr>
	                <td><input type="checkbox" name="cb65" value="Extra Toppings"> Extra Toppings
	                 <input type="text" name="ET" value="" placeholder="In Which Content"></td>
	                <td><input type="number" value="" name="qty65"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>15*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb66" value="Extra Ketchup"> Extra Ketchup</td>
	                <td><input type="number" value="" name="qty66"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>1*</td>
	            </tr>
	             <tr>
	                <td><input type="checkbox" name="cb67" value="Chilli Sauce"> Chilli Sauce</td>
	                <td><input type="number" value="" name="qty67"  name=""  placeholder="Quantity" autocomplete="off"></td>
	                <td>1*</td>
	            </tr>
	           </table>
	           <center>
	           <input class="btn btn-primary" type="Submit" value="Proceed To Confirm" name="">
	           </center>
			</div>
		</form>
	</div>
	</body>
</html>