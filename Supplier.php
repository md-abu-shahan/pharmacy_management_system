<!DOCTYPE html>
<html>
	<head>
		<title>
			supplier
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			html, body {
			  background-image: url("image\\supplier.jpg");
			  background-size: cover;
			}
		</style>
		
		<script>
			function supplier(i){
				if(i==1){
				document.getElementById('supplier_popup').style.display='block';
				}else{document.getElementById('supplier_popup').style.display='none';}
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
		
			<div id="supplier_popup" class="popup_supplier_main_div">
				<div  class="popup_supplier_div">
					<i id="close_color" style="float:right; cursor:pointer;" class="fa fa-close" onClick="supplier(2)" onmouseenter="mouseEnter(this)"onmouseleave="mouseLeave(this)"></i><br>
					<table>
						<caption style="color:blue;">Supplier Details </caption>
					
					<tr>
						<th>Product Name</th>
						<th>QTY</th>
						<th>Category</th>
						<th>Date</th>					
						<th>Time</th>					
					</tr>
					<?php
					include("database connection/ctn.php");
					$find=$_GET['id'];
					$sql3="select * from per_supplier";
					$result = mysqli_query($conn,$sql3);
						
						while($array=mysqli_fetch_array($result))
						{
							if($find==$array['Sphone'])
							{
							?>
								
								<tr>
									<td><?php echo $array['product_name'];?></a></td>
									<td><?php echo $array['qty']; ?></td>
									<td><?php echo $array['category']; ?></td>
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
						<th colspan="2">Prement</th>
						<th colspan="2">
							<?php
								$sql9="select * from supplier where supplier_phone=".$find;
								$result2 = mysqli_query($conn,$sql9);
								$array2 = mysqli_fetch_array($result2);
								echo $array2['last_prement']; 
							?>
						</th>
					<tr>
				</table>
				
				</div>
			</div>
		
		
		
		
		
		
		
		
		
			<div class="head" style="min-width:350px;">
				<h1 class="title_edit">Pharmacy management system</h1>
			</div>
			<div class="menu" style="min-width:350px;">
				<a href="dashboard.php" target=""><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				<a href="sales.php" target=""><h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				<a href="Product.php" target=""><h3><i class="fa fa-shopping-basket text-primary"></i> Product </h3>
				<a href="Customer.php" target=""><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				<a href="Supplier.php" target="" style="background:#66a3ff;"><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				<a href="Sales_report.php" target=""><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				<a href="Stock_report.php" target=""><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
			<div class="main_div_supplier">
				<table>
					<caption style="font-size:30px; color:white;text-shadow: 3px 0px black;">
						Supplier Details
					</caption>
					<tr>
						<th colspan="3" style="border:2px solid transparent; background:transparent; border-bottom:2px solid black;">
							<input type="search" placeholder="Product Name" name="" style="width:100%;font-size:16px;"> 
						</th>
						<th style="border:2px solid transparent; background:transparent; border-bottom:2px solid black;"><input type="submit" value="Search">
						</th>	
					</tr>
					<tr>
						<th>Supplier Name</th>
						<th>Company Name</th>
						<th>Contact No</th>
						<th>Due</th>
					</tr>
					<?php
					include("database connection/ctn.php");
					$sql="select * from supplier";
					$result = mysqli_query($conn,$sql);


					while($array=mysqli_fetch_array($result))
					{
					?>
						<tr>
							<td> <a href="Supplier.php?id=<?php echo $array['supplier_phone']; ?>" target="" style="background:white;color:blue;" onClick="supplier(1)"> <?php echo $array['supplier_name']; ?></a></td>
							<td><?php echo $array['company_name']; ?></td>
							<td><?php echo $array['supplier_phone']; ?></td>
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
