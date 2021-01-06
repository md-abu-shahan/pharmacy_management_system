<!DOCTYPE html>
<html>
	<head>
		<title>
			Sales report
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			html, body {
			  background-image: url("image\\sell_pic_5.jpg");
			  background-size: cover;
			}
		</style>

	</head>
	<body>
		<div class="full-height">
			<div class="head" style="min-width:370px;">
				<h1 class="title_edit">Pharmacy management system</h1>
			</div>
			<div class="menu" style="min-width:370px;">
				<a href="dashboard.php" target=""><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				<a href="sales.php" target=""><h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				<a href="Product.php" target=""><h3><i class="fa fa-shopping-basket text-primary"></i> Product </h3>
				<a href="Customer.php" target=""><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				<a href="Supplier.php" target=""><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				<a href="Sales_report.php" target="" style="background:#66a3ff;"><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				<a href="Stock_report.php" target=""><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
				<div class="form_date">
				<form action="Sales_report.php" method="post" enctype="multipart/form-data">
					<table>
						<caption >
							<h2 style="color:black; text-shadow: 3px 0px red; text-align:center;">Sales Report</h2>
						</caption>
						<tr>
							<th>From date</th>
							<th>To date</th>
							<th rowspan="2" style="border:2px solid transparent; background:transparent;"> <input type="submit"  name="search" style="width:100%;" value="Search"> </th>
						</tr>
						<tr>
							<td><input type="date" placeholder="from_date" name="from" > </td>
							<td><input type="date" placeholder="to_date" name="to" > </td>
						</tr>
					</table>
				</form>
				</div>
				
				<div class="main_div_sales_report">
				
					<table>
						<caption style="font-size:20px; color:black">
							Sale Report
						</caption>
						<tr>
							<th>Product Name</th>
							<th>Amount</th>
							<th>Qty</th>
							<th>Customer Count</th>
							<th>Date</th>
						</tr>
						<?php
					include("database connection/ctn.php");

					if(isset($_REQUEST['search']))
					{
						$value1=$_REQUEST['from'];
						$value2=$_REQUEST['to'];
					}

						$sql="select * from per_customer where date BETWEEN '$value1' AND '$value2'";
						$result = mysqli_query($conn,$sql);
						while($array=mysqli_fetch_array($result))
						{
					?>
						<tr>
							<td><?php echo $array['product_name'];?></td>
							<td><?php echo '0'; ?></td>
							<td><?php echo '0'; ?></td>
							<td><?php echo '0'; ?></td>
							<td><?php echo $array['date']; ?></td>
						</tr>

					<?php
						}
					?>
						
					
					</table>
					<table style="min-width:340px;">
						<tr>
							<th style="color:red;"> Total amount </th>
							<td> ৳ </td>
						</tr>
						<tr>
							<th style="color:green;"> Total profit </th>
							<td> ৳ </td>
						</tr>
					</table>
				</div>
				<div class="profit">
					
				</div>
			
		</div>
	</body>
</html>
