<!DOCTYPE html>
<html>
	<head>
		<title>
			Stock report
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			html, body {
			  background-image: url("image\\stock_report.jpg");
			  background-size: cover;
			}
		</style>
		
		<script>
			function mouseEnter(r) {
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById('stock_tables').rows[index].cells[5].style.color = 'red';
			  
			}
			function mouseLeave(r) {
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById('stock_tables').rows[index].cells[5].style.color = 'black';
			}
		</script>

	</head>
	<body>
		<div class="full-height">
			<div class="head" style="min-width:340px;">
				<h1 class="title_edit">Pharmacy management system</h1>
			</div>
			<div class="menu" style="min-width:340px;">
				<a href="dashboard.php" target=""><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				<a href="sales.php" target=""><h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				<a href="Product.php" target=""><h3><i class="fa fa-shopping-basket text-primary"></i> Product </h3>
				<a href="Customer.php" target=""><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				<a href="Supplier.php" target=""><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				<a href="Sales_report.php" target=""><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				<a href="Stock_report.php" target="" style="background:#66a3ff;"><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
			<div class="Search_product">
				<table id="stock_tables">
					<caption >
						<h2 style="color:black; text-shadow: 3px 0px red; text-align:center;">Stock Report</h2>
					</caption>
					<tr>
						<th colspan="5" style="border:2px solid transparent; background:transparent; border-bottom:2px solid black;">
							<input type="search" placeholder="product name" name="" style="width:100%;font-size:16px;"> 
						</th>
						<th style="border:2px solid transparent; background:transparent; border-bottom:2px solid black;"><input type="submit" value="Search">
						</th>	
					</tr>
					<tr>
						<th>Name</th>
						<th>Generic Name</th>
						<th>Category</th>
						<th>Expire Date</th>
						<th>QTY</th>
						<th>Action</th>
					</tr>
					<?php
						include("database connection/ctn.php");
						$find=$_GET['id'];
						$query = "DELETE FROM per_supplier WHERE product_name=".$find;
						mysqli_query($conn,$query);
					?>
					
					<?php
					include("database connection/ctn.php");
					$sql3="select * from per_supplier";
					$result = mysqli_query($conn,$sql3);

					while($array=mysqli_fetch_array($result))
					{
					?>
						<tr>
							<td><?php echo $array['product_name'];?></a></td>
							<td><?php echo $array['generic_name']; ?></td>
							<td><?php echo $array['category']; ?></td>
							<td><?php echo $array['expire_date']; ?></td>
							<td><?php echo $array['qty']; ?></td>
							<td><a href="Stock_report.php?id=<?php echo $array['product_name']?>"</a><?php echo "<i class=\"fa fa-trash\" onclick=\"delete_f(this)\" style=\"cursor:pointer;\" onmouseenter=\"mouseEnter(this)\"onmouseleave=\"mouseLeave(this)\" name=\"delete\"></i> "; ?> </td>
						</tr>

					<?php
					}
					?>
					
					
					
				</table>
				<table style="min-width:340px;">
					<caption >
						<h2 style="color:yellow; text-shadow: 3px 0px black; text-align:center;">Nearest Expire Date</h2>
					</caption>
					<tr>
						<th>Name</th>
						<th>Generic Name</th>
						<th>Category</th>
						<th>Expire Date</th>
					</tr>
					<tr>
						<th>.</th>
						<th>.</th>
						<th>.</th>
						<th>.</th>
					</tr>
				</table>
				
			</div>
		</div>
	</body>
</html>
