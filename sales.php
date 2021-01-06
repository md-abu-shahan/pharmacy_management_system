<!DOCTYPE html>
<html>
	<head>
		<title>
			Sales
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body {
			   background-image: url(image\\sell_pic_1.jpg);
			   background-size: cover;
			}
		</style>
		
		<script>
			var i=1;
			/* function addFunction() {
				var a=document.getElementById("product_name").value;
				var b=document.getElementById("qty").value;
				
				if(a!="" && b!=""){
					document.getElementById("product_name").value='';
					document.getElementById("qty").value='';
					
					var table = document.getElementById("sale_tables");
					var row = table.insertRow(i);
					var cell1 = row.insertCell(0);
					var cell2 = row.insertCell(1);
					var cell3 = row.insertCell(2);
					var cell4 = row.insertCell(3);
					var cell5 = row.insertCell(4);
					cell1.innerHTML = i;
					cell2.innerHTML = a;
					cell3.innerHTML = b;
					cell4.innerHTML = "non";
					cell5.innerHTML = "<i class=\"fa fa-trash\" onclick=\"delete_f(this)\" style=\"cursor:pointer;\" onmouseenter=\"mouseEnter(this)\"onmouseleave=\"mouseLeave(this)\"></i> " ;
					i++;
				}else{
					window.alert("Error");
				}
			} */
			/*function delete_f(r){
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById("sale_tables").deleteRow(index);
				i--;
				
				var table = document.getElementById("sale_tables");
				
				for(var j=1;j<i;j++){
					table.rows[j].cells[0].innerHTML=j;
				}
				
			}
			*/
			/*var index ;
			var table = document.getElementById.("sale_tables");
			
			for(var i=0;i<table.rows.length;i++)
			{
				table.rows[i].cells[4].onclick=function(){
					index = this.parentElement.rowIndex;
					table.deleteRow(index);
					console.log(index);
				};
			}*/
			
			function mouseEnter(r) {
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById('sale_tables').rows[index].cells[4].style.color = 'red';
			  
			}

			function mouseLeave(r) {
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById('sale_tables').rows[index].cells[4].style.color = 'black';
			}
		</script>

	</head>
	<body>
		<div class="full-height">
			<div class="head" style="min-width:320px;">
				<h1 class="title_edit">Pharmacy management system</h1>
			</div>
			<div class="menu" style="min-width:320px;">
				<a href="dashboard.php" target=""><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				
				<a href="sales.php" target="" style="background:#66a3ff;"> <h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				
				<a href="Product.php" target=""><h3><i class="fa fa-shopping-basket text-primary"></i> Product</h3></a>
				
				<a href="Customer.php" target=""><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				
				<a href="Supplier.php" target=""><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				
				<a href="Sales_report.php" target=""><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				
				<a href="Stock_report.php" target=""><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
			<div class="main_div_sales">
			
				<?php
					include("database connection/ctn.php");	
					if(isset($_REQUEST['add'])){
						$Pdname=$_REQUEST['name'];
						$qty1=$_REQUEST['QTY'];
						$sql2="insert into demo_sales(product_name,qty) values ('$Pdname','$qty1')";
						$result1 = mysqli_query($conn,$sql2);
					}
					
					// if(isset($_REQUEST['submit']))
					// {
						
					// }
				?>
				<form action="sales.php" method="post" enctype="multipart/form-data">
				<table class="sale_table">
					<caption>
						<h2 style="color:red; text-shadow: 2px 0px white; text-align:center">SALES</h2>
					</caption>
					
					<tr>
						<th class="table_border_none"><input type="search" placeholder="Product Name" id="product_name" class="sale_search_button" name="name"></input></th>
						
						<th class="table_border_none"><input type="number" placeholder="QTY" id="qty" style="width:100%;min-width:30px;" name="QTY"></input></th>
					
						<td class="table_border_none"><input type="submit"  name="add" style="width:100%;" value="Add" onclick="addFunction()"></input></td>
					</tr>
				</table>
				</form>
				<table style="min-width:320px;" id="sale_tables">
					<tr>
						<th>#</th>
						<th>Product Name</th>
						<th>Quentity</th>
						<th>Product Price</th>
						<th>Action</th>
					</tr>
					<?php
						include("database connection/ctn.php");
						$find=$_GET['id'];
						$query = "DELETE FROM demo_sales WHERE id=".$find;
						mysqli_query($conn,$query);
					?>
					<?php
					include("database connection/ctn.php");
					$sql3="select * from demo_sales";
					$result = mysqli_query($conn,$sql3);
					while($array=mysqli_fetch_array($result))
					{
					?>
						<tr>
							<td><?php echo $array['id']?></a></td>
							<td><?php echo $array['product_name']; ?></td>
							<td><?php echo $array['qty']; ?></td>
							<td><?php
								$product=$array['product_name'];
								$sql7="select * from per_supplier where product_name='$product'";
								$result1 = mysqli_query($conn,$sql7);
								$array1=mysqli_fetch_array($result1);
							echo $array['qty']*$array1['selling_price']; ?></td>
							<td><a href="sales.php?id=<?php echo $array['id'] ?>" <?php echo "<i class=\"fa fa-trash\" onclick=\"delete_f(this)\" style=\"cursor:pointer;\" onmouseenter=\"mouseEnter(this)\"onmouseleave=\"mouseLeave(this)\" name=\"delete\"></i> "; ?> </a></td>
						</tr>

					<?php
					}
					?>
					
					
				</table>
				<form action="sales.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<th class="table_transparent" style="border:2px solid transparent;"></th>
						<td class="table_transparent" style="border:2px solid transparent;"></td>
					</tr>
					<tr>
						<th class="table_border_none"><input type="search" placeholder="Customer Name" id="customer_name"  class="sale_search_button" name="CustomerName"></th>
						<th rowspan="2" colspan="2" class="table_border_none"><input type="submit" placeholder="search" name="submit" style="width:100%;" value="Submit"></th>
					</tr>
					<tr>
						<td class="table_border_none"><input type="search" placeholder="Phone Number" id="c_phone_namber" class="sale_search_button" name="Phone"></td>
					</tr>
				</table>
				<table class="sale_amount">
					<tr>
						<th>Total Price</th>
						<td>
					<?php

					$sql8="select * from demo_sales";
					$result = mysqli_query($conn,$sql8);
					$sum=0;
					while($array=mysqli_fetch_array($result))
					{
						$product=$array['product_name'];
						$sql7="select * from per_supplier where product_name='$product'";
						$result1 = mysqli_query($conn,$sql7);
						$array1=mysqli_fetch_array($result1);
						$sum += $array['qty']*$array1['selling_price'];
					}
					echo $sum;
					
					$sql9="select * from demo_sales";
					$result1 = mysqli_query($conn,$sql9);
					$qty=0;
					while($array=mysqli_fetch_array($result1))
					{
						$qty += $array['qty'];
					}
					
					if(isset($_REQUEST['submit']))
					{
						$name=$_REQUEST['CustomerName'];
						$phone=$_REQUEST['Phone'];
						$prement=$_REQUEST['Prement'];
						$sql="select * from customer where customer_phone='$phone'";
						$res=mysqli_query($conn,$sql);
						$f=mysqli_num_rows($res);
						//echo $f;
						if($f==0)
						{	
							$due1=$sum-$prement;
							$sql1="insert into customer values ('$name','$phone','$qty','$due1','$prement')";
							mysqli_query($conn,$sql1);
							echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
						}else{
							
							$sql12="select * from customer where customer_phone='$phone'";
							$check=mysqli_query($conn,$sql12);
							$arr=mysqli_fetch_array($check);
							$due=$arr['due'];
							$due += ($sum-$prement);
							
							$sql13="select * from customer where customer_phone='$phone'";
							$check1=mysqli_query($conn,$sql13);
							$arr1=mysqli_fetch_array($check1);
							$qty1=$arr['QTY'];
							$qty1 += $qty;
							
							$sql10="UPDATE customer SET last_prement=$prement,due=$due,QTY=$qty1 where customer_phone='$phone'";
							mysqli_query($conn,$sql10);
						}
						$sql4="select * from demo_sales";
						$result = mysqli_query($conn,$sql4);
						while($array=mysqli_fetch_array($result))
						{
							date_default_timezone_set("Asia/Dhaka");
							$date=date("Y-m-d");
							$time=date("h:i:sa");
							$product=$array['product_name'];
							$qty2=$array['qty'];
							$phone=$_REQUEST['Phone'];
							$sql5="insert into per_customer values ('$phone','$product','$qty2','$date','$time')";
							mysqli_query($conn,$sql5);	
						}
						$sql6='truncate table demo_sales';
						mysqli_query($conn,$sql6);
					}
					?>
						</td>
					</tr>
					
					<!---<tr>
						<th>Parcentage</th>
						<td><input type="number" placeholder="%" name="" style="width:98%;min-width:50px;"></td>
					</tr>
					<tr>
					 	<th>Calculate Price</th>
						<td>0</td>
						<!-- <td rowspan="2" style="border:2px solid transparent; background:transparent;"><input type="Submit" value="Print" name="" style="width:100%;min-width:50px;"></td> ---
					</tr>-->
					<tr>
						<th>Prament</th>
						<td><input type="number"  name="Prement" class="sale_search_button" style="width:99%;"></td>
					</tr>
					
				</table>
				</form>
			</div>
			
		</div>
	</body>
</html>
