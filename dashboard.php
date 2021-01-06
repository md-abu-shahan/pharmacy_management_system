<!DOCTYPE html>
<html>
	<head>
		<title>
			Dashboard
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body {
			   background-image: url(image\\dashboard.jpg);
			   <!--- background-size: cover; --->
			}
		</style>

	</head>
	<body>
		<div class="full-height">
			<div class="head">
				<h1 style="text-shadow: 3px 2px red; text-align:center;">Pharmacy management system</h1>
			</div>
			<div class="menu">
				<a href="dashboard.php" target="" style="background:#66a3ff;"><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				<a href="sales.php" target=""><h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				<a href="Product.php" target=""><h3><i class="fa fa-shopping-basket text-primary"></i> Product </h3>
				<a href="Customer.php" target=""><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				<a href="Supplier.php" target=""><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				<a href="Sales_report.php" target=""><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				<a href="Stock_report.php" target=""><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
			
			<div class="main_div_dashboard">
			
				<h2 style="color:white; text-shadow: 3px 2px blue; text-align:center;">DASHBOARD</h2>
				<div class="box_degin_1">
					<h4>Total Medicine</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Total Company</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Today Sale</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Yesterday Sale</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Last 7 day sale</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>This Month Sale</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Today Due</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Total Due</h4>
					<h4>0</h4>
				</div>
				<div class="box_degin_1">
					<h4>Total Sale</h4>
					<h4>0</h4>
				</div>
				
			</div>
			
		</div>
	</body>
</html>
