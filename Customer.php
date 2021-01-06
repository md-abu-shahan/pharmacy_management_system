<!DOCTYPE html>
<html>
	<head>
		<title>
			Customer
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			html, body {
			  background-image: url("image\\sell_pic_6.jpg");
			  background-size: cover;
			}
		</style>
		
		<script>
			function customer(i){
				if(i==1){
				document.getElementById('customer_popup').style.display='block';
				}else if(i==2){
					document.getElementById('customer_popup').style.display='none';
				}
			}
			function mouseEnter(i) {	
				i.style.color = 'red';
			}

			function mouseLeave(i) {
			  i.style.color = 'black';
			  }
		</script>
		
		
	</head>
	<body>
		<div class="full-height">
		
			<div id="customer_popup" class="popup_customer_main_div">
				<div  class="popup_customer_div">
					<i id="close_color" style="float:right; cursor:pointer;" class="fa fa-close" onClick="customer(2)" onmouseenter="mouseEnter(this)"onmouseleave="mouseLeave(this)"></i><br>
					<table>
						<caption style="color:blue;">Customer Details </caption>
					
					<tr>
						<th>Product Name</th>
						<th>QTY</th>
						<th>Date</th>					
						<th>Time</th>					
					</tr>
					
					
					
					
					<?php
					include("database connection/ctn.php");
					$find=$_GET['id'];
					$sql3="select * from per_customer ";
					$result = mysqli_query($conn,$sql3);
						while($array=mysqli_fetch_array($result))
						{
							if($find==$array['Cphone'])
							{
							?>
								
								<tr>
									<td><?php echo $array['product_name'];?></a></td>
									<td><?php echo $array['qty']; ?></td>
									<td><?php echo $array['date']; ?></td>
									<td><?php echo $array['time']; ?></td>
								</tr>

							<?php
							}
						}
					?>
					
					
				</table>
				<table>
					<tr>
						<th colspan="2">Last prement</th>
						<th colspan="2">
							<?php
								$sql9="select * from customer where customer_phone=".$find;
								$result2 = mysqli_query($conn,$sql9);
								$array2 = mysqli_fetch_array($result2);
								echo $array2['last_prement']; 
							?>
						</th>
					<tr>
				</table>
				
				</div>
			</div>
		
		
		
		
		
		
		
		
		
		
			<div class="head" style="min-width:330px;">
				<h1 class="title_edit">Pharmacy management system</h1>
			</div>
			<div class="menu" style="min-width:330px;">
				<a href="dashboard.php" target=""><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				<a href="sales.php" target=""><h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				<a href="Product.php" target=""><h3><i class="fa fa-shopping-basket text-primary"></i> Product </h3>
				<a href="Customer.php" target="" style="background:#66a3ff;"><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				<a href="Supplier.php" target=""><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				<a href="Sales_report.php" target=""><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				<a href="Stock_report.php" target=""><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
			
			<div class="main_div_customer">
				<table>
					<caption style="font-size:30px; color:white;">Customer Details </caption>
					<tr>
						<th colspan="3" style="border:2px solid transparent; background:transparent; border-bottom:2px solid black;">
							<input type="search" placeholder="Customer Name" name="" style="width:100%;font-size:16px;"> 
						</th>
						<th style="border:2px solid transparent; background:transparent; border-bottom:2px solid black;"><input type="submit" value="Search">
						</th>	
					</tr>
					<tr>
						<th >Customer Name</th>
						<th>Contact Number</th>
						<th>QTY</th>
						<!-- <th>Cush</th> -->
						<th>Due</th>					
						<!-- <th>Total Price</th> -->
					</tr>
					<!---<tr>
						<td><a href="#" target="" style="background:white;color:blue;" onClick="customer(1)">Md_Abu_Shahan</a></td>
						<td>01703844436</td>
						<td>000</td>
						<td>000</td>
					</tr>----->
					<?php
					include("database connection/ctn.php");
					$sql="select * from customer";
					$result = mysqli_query($conn,$sql);


					while($array=mysqli_fetch_array($result))
					{
					?>
						<tr>
							<td> <a href="Customer.php?id=<?php echo $array['customer_phone']; ?>" target="" style="background:white;color:blue;" onClick="customer(1)" name=""> <?php echo $array['customer_name']; ?></a></td>
							<td><?php echo $array['customer_phone']; ?></td>
							<td><?php echo $array['QTY']; ?></td>
							<td><?php echo $array['due']; ?></td>
						</tr>

					<?php
					}
			?>
				</table>
				
				
				
			</div>
			
		</div>
	</body>
</html>