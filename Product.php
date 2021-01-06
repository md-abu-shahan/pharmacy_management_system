<!DOCTYPE html>
<html>
	<head>
		<title>
			Product
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body {
			   background-image: url(image\\sell_pic_2.jpg);
			   background-size: cover;
			}
		</style>
		
		
		
		<script>
			var i=1;
			function addFunction() {
				var a=document.getElementById("ProductName").value;
				var b=document.getElementById("GenericName").value;
				var c=document.getElementById("Category").value;
				var d=document.getElementById("ExpireDate").value;
				var e=document.getElementById("qty").value;
				var f=document.getElementById("OrigenalPrice").value;
				var g=document.getElementById("SellingPrice").value;
				
				

				/* if(a!="" && b!="" && c!=""&& d!=""&& e!=""&& f!=""&& g!=""){
					
					document.getElementById("ProductName").value='';
					document.getElementById("GenericName").value='';
					document.getElementById("Category").value='';
					document.getElementById("ExpireDate").value='';
					document.getElementById("qty").value='';
					document.getElementById("OrigenalPrice").value='';
					document.getElementById("SellingPrice").value='';
					
					var table = document.getElementById("product_tables");
					var row = table.insertRow(i);
					var cell1 = row.insertCell(0);
					var cell2 = row.insertCell(1);
					var cell3 = row.insertCell(2);
					var cell4 = row.insertCell(3);
					var cell5 = row.insertCell(4);
					var cell6 = row.insertCell(5);
					var cell7 = row.insertCell(6);
					var cell8 = row.insertCell(7);
					cell1.innerHTML = a;
					cell2.innerHTML = b;
					cell3.innerHTML = c;
					cell4.innerHTML = d;
					cell5.innerHTML = f;
					cell6.innerHTML = g;
					cell7.innerHTML = e;
					cell8.innerHTML = "<i class=\"fa fa-trash\" onclick=\"delete_f(this)\" style=\"cursor:pointer;\" onmouseenter=\"mouseEnter(this)\"onmouseleave=\"mouseLeave(this)\"></i> " ;
					i++;
				} */else{
					window.alert("Error");
				}
			}
			function delete_f(r){
				var index=r.parentNode.parentNode.rowIndex;
				//var table = document.getElementById.("product_tables");
				//var ii=table.rows.length
				document.getElementById("product_tables").deleteRow(index);
				i--;
				//window.alert(ii);
			}
			
			
			function mouseEnter(r) {
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById('product_tables').rows[index].cells[7].style.color = 'red';
			  
			}

			function mouseLeave(r) {
				var index=r.parentNode.parentNode.rowIndex;
				document.getElementById('product_tables').rows[index].cells[7].style.color = 'black';
			}
		</script>
		
				
		
		
	</head>
	<body>
		<div class="full-height">
			<div class="head" style="min-width:430px;">
				<h1 class="title_edit">Pharmacy management system</h1>
			</div>
			<div class="menu" style="min-width:430px;">
				<a href="dashboard.php" target=""><h3><i class="fa fa-dashboard text-green"></i> Dashboard </h3></a>
				<a href="sales.php" target=""><h3> <i class="fa fa-shopping-cart text-primary Sales"></i> Sales </h3></a>
				<a href="Product.php" target="" style="background:#66a3ff;"><h3><i class="fa fa-shopping-basket text-primary"></i> Product </h3>
				<a href="Customer.php" target=""><h3><i class="fa fa-user-o text-primary"></i> Customer </h3></a>
				<a href="Supplier.php" target=""><h3><i class="fa fa-users text-primary"></i> Supplier</h3></a>
				<a href="Sales_report.php" target=""><h3><i class="fa fa-bar-chart-o text-primary"></i> Sales Report</h3></a>
				<a href="Stock_report.php" target=""><h3><i class="fa fa-cubes"></i> Stock report</h3></a>
				<a href="index.php" target=""><h3><i class="fa fa-power-off"></i> Log Out</h3></a>
			</div>
			<div class="main_div_product">
				
				<?php
					include("database connection/ctn.php");
					
					if(isset($_REQUEST['add'])){
						$name=$_REQUEST['name'];
						$Generic=$_REQUEST['GenericName'];
						$Category=$_REQUEST['Category'];
						$Expire=$_REQUEST['ExpireDate'];
						$Origenal =$_REQUEST['qty'];
						$Selling=$_REQUEST['OrigenalPrice'];
						$QTY=$_REQUEST['SellingPrice'];
						$sql2="insert into demo_product values ('$name','$Generic','$Category','$Expire','$Origenal','$Selling','$QTY')";
						$result1 = mysqli_query($conn,$sql2);
					}	
				?>
				
				
			<form action="product.php" method="post" enctype="multipart/form-data">
				<table class="supplier_documant">
					<caption style="font-size:30px; color:white;text-shadow: 3px 0px black;">
						Product
					</caption>
					
					<!------ <tr>
						<th class="table_transparent"></th>
						<td class="table_transparent"></td>
					</tr> ----->
					<tr>
						<th class="table_border_none">
							 Product Name :
						</th>
						<td class="table_border_none">
							<input type="text" placeholder="Product Name" name="name" class="sale_search_button" id="ProductName" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Generic Name :
						</th>
						<td class="table_border_none">
							<input type="text" placeholder="Generic Name" name="GenericName" class="sale_search_button" id="GenericName" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Category :
						</th>
						<td class="table_border_none">
							<input type="text" placeholder="Category" name="Category" class="sale_search_button" id="Category" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Expire Date :
						</th>
						<td class="table_border_none">
							<input type="date" placeholder="Date" name="ExpireDate" class="sale_search_button" id="ExpireDate" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Quentity :
						</th>
						<td class="table_border_none">
							<input type="number" placeholder="Number" name="qty" class="sale_search_button" id="qty" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							Origenal price :
						</th>
						<td class="table_border_none">
							<input type="number" placeholder="Price" name="OrigenalPrice" class="sale_search_button" id="OrigenalPrice" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							Selling price :
						</th>
						<td class="table_border_none">
							<input type="number" placeholder="Price" name="SellingPrice" class="sale_search_button" id="SellingPrice" style="width:99%;">
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							
						</th>
						<td class="table_border_none">
							<input type="submit" value="Add" name="add" class="sale_search_button" onclick="addFunction()">
						</td>
					</tr>
				</table>
				
			</form>
			</div>
			<div class="main_div_product">
				<form action="product.php" method="post" enctype="multipart/form-data">
				<table style="min-width:400px;" id="product_tables">
					<caption style="font-size:30px; color:white;text-shadow: 3px 0px black;">
						Product Details
					</caption>
					<tr>
						<th>Name</th>
						<th>Generic Name</th>
						<th>Category</th>
						<th>Expire Date</th>
						<th>Origenal Price</th>
						<th>Selling Price</th>
						<th>QTY</th>
						<th>Action</th>
					</tr>
					<?php
						include("database connection/ctn.php");
						$find=$_GET['id'];
						$query = "DELETE FROM demo_product WHERE product_name=".$find;
						mysqli_query($conn,$query);
					?>
					<?php
					include("database connection/ctn.php");
					$sql3="select * from demo_product";
					$result = mysqli_query($conn,$sql3);
					
					// if($_POST['delete']){
						// $DQ="DELETE FROM demo_sales where id='$POST['id']'";
						// mysqli_query($conn,$DQ);
					// }

					while($array=mysqli_fetch_array($result))
					{
					?>
						<tr>
							<td><?php echo $array['product_name']?></a></td>
							<td><?php echo $array['generic_name']; ?></td>
							<td><?php echo $array['category']; ?></td>
							<td><?php echo $array['expire_date']; ?></td>
							<td><?php echo $array['original_price']; ?></td>
							<td><?php echo $array['selling_price']; ?></td>
							<td><?php echo $array['qty']; ?></td>
							<td><a href="Product.php?id=<?php echo $array['product_name'] ?>" </a> <?php echo "<i class=\"fa fa-trash\" onclick=\"delete_f(this)\" style=\"cursor:pointer;\" onmouseenter=\"mouseEnter(this)\"onmouseleave=\"mouseLeave(this)\" name=\"delete\"></i> "; ?> </td>
						</tr>

					<?php
					}
					?>
				</table>
				
				<table style="min-width:400px;">
					<tr>
						<th class="table_transparent" style="border:2px solid transparent;"></th>
						<td class="table_transparent" style="border:2px solid transparent;"></td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Supplier Name :
						</th>
						<td class="table_border_none">
							<input type="Search" placeholder="Supplier Name" name="SupplierName" class="sale_search_button" >
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Phone Number :
						</th>
						<td class="table_border_none">
							<input type="Search" placeholder="Number" name="Phone" class="sale_search_button" >
						</td>
					</tr>
					<tr>
						<th class="table_border_none">
							 Company Name :
						</th>
						<td class="table_border_none">
							<input type="Search" placeholder="Company Name" name="CompanyName" class="sale_search_button" >
						</td>
					</tr>
					<tr>
						<th class="table_transparent" style="border:2px solid transparent;"></th>
						<td class="table_transparent" ></td>
					</tr>
					<tr>
						<th>
							Total price :
						</th>
						<td>
						<?php
							$sql8="select * from demo_product";
							$result = mysqli_query($conn,$sql8);
							$sum=0;
							while($array=mysqli_fetch_array($result))
							{
								$sum += $array['original_price']*$array['qty'];
							}
							echo $sum;
							
							if(isset($_REQUEST['submit']))
					{
						$name=$_REQUEST['SupplierName'];
						$phone=$_REQUEST['Phone'];
						$company=$_REQUEST['CompanyName'];
						$prement=$_REQUEST['Prement'];
						
						$sql="select * from supplier where supplier_phone='$phone'";
						$res=mysqli_query($conn,$sql);
						$f=mysqli_num_rows($res);
						echo $f;
						if($f==0)
						{
							$due1=$sum-$prement;
							$sql1="insert into supplier values ('$name','$phone','$company','$due1','$prement')";
							mysqli_query($conn,$sql1);
							//console.log("Successfully!!");
							echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
						}else{
							$sql12="select * from supplier where supplier_phone='$phone'";
							$check=mysqli_query($conn,$sql12);
							$arr=mysqli_fetch_array($check);
							$due=$arr['due'];
							$due += ($sum-$prement);
							
							
							$sql10="UPDATE supplier SET last_prement=$prement,due=$due where supplier_phone='$phone'";
							mysqli_query($conn,$sql10);
						}
						
						
						$sql4="select * from demo_product";
						$result = mysqli_query($conn,$sql4);
						while($array=mysqli_fetch_array($result))
						{
							date_default_timezone_set("Asia/Dhaka");
							$date=date("d-m-Y");
							$time=date("h:i:sa");
							$product=$array['product_name'];
							$qty2=$array['qty'];
							$category=$array['category'];
							$generic=$array['generic_name'];
							$expire=$array['expire_date'];
							$original=$array['original_price'];
							$selling=$array['selling_price'];
							
							$sql5="insert into per_supplier values ('$phone','$product','$qty2','$category','$date','$time','$generic','$expire','$original',	'$selling')";
							mysqli_query($conn,$sql5);
						}
						$sql6='truncate table demo_product';
						mysqli_query($conn,$sql6);
					}
						?>
						</td>
					</tr>
					<tr>
						<th>
							prement:
						</th>
						
						<td>
							<h1><input type="number"  name="Prement" class="sale_search_button" style="width:99%;"></h1>
						</td>
						
					</tr>
					<tr>
						<td colspan="2" class="table_border_none">
							<input type="submit" value="Submit" name="submit" class="sale_search_button" >
						</td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</body>
</html>
