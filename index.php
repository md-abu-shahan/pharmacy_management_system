<!DOCTYPE html>
<html>
	<head>
		<title>Pharmacy Management System</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="mystylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			h1{
				text-align:center;
			}
		</style>
		
		<script>
			function registration_work(i){
				if(i==1){
					var a=document.getElementById('registration_pop_up');
					a.style.display='block';
					//a.style.color='red';
				}else{
					document.getElementById('registration_pop_up').style.display='none';
				}
			}
			
			
			function forget_work(i){
				if(i==1){
					document.getElementById('forget_password_pop_up').style.display='block';
				}else{
					document.getElementById('forget_password_pop_up').style.display='none';
				}
			}

			function mouseEnter(i) {
				if(i==1){
				document.getElementById('close_color').style.color = 'red';
			  }
			  else{
				document.getElementById('close_color1').style.color = 'red';
			  }
			}

			function mouseLeave(i) {
			  if(i==1){
				document.getElementById('close_color').style.color = 'black';
			  }
			  else{document.getElementById('close_color1').style.color = 'black';}
			}
		</script>
	</head>
	
	<body>
		<div class="full-height">
			<div  id = "registration_pop_up" class="popup_main_div">
				
				<?php
					include("database connection/ctn.php");
					if(isset($_REQUEST['reg']))
					{
						$name=$_REQUEST['u_name'];
						$phone=$_REQUEST['phone'];
						$pass=$_REQUEST['pass'];
						$c_pass=$_REQUEST['c_pass'];
						$registration="select * from login where user='$name'";
						$res=mysqli_query($conn,$registration);
						$f=mysqli_num_rows($res);
						//echo $fl;
						$null="1";
						if($name===$null){
						}else{
						if($pass != $c_pass){
							echo "<script type='text/javascript'>alert(\"passward are not matching!!\");</script>";
						}
						else if($f==0)
						{
						
							$registration1="insert into login values ('$name','$pass','$phone')";
							mysqli_query($conn,$registration1);
							console.log("Successfully!!");
							echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
						}else{
							echo "<script type='text/javascript'>alert(\"User Name are used!!\");</script>";
						}
						}
						
					}
					else if(isset($_REQUEST['go']))
					{
						include("database connection/ctn.php");
						$username=$_REQUEST['username'];
						$password=$_REQUEST['password'];
						//$remember=isset($_POST['remember'])==true?1:0; 
						
						$loginQuery="SELECT * FROM login WHERE user='$username' AND pass='$password'";
						$res1=mysqli_query($conn,$loginQuery);
						$f1=mysqli_num_rows($res1);
						if($f1==0)
						{
						?>
							<?php echo "<script type='text/javascript'>alert(\"Wrong username OR password!!\");</script>"; ?>
							header("Location:index.php");
						<?php
						}
						else 
						{
							header("Location:dashboard.php");
						}
						
					}
				?>
				
				<div  class="popup_registration_div">
				 <i id="close_color" style="float:right; cursor:pointer;" class="fa fa-close" onClick="registration_work(2)" onmouseenter="mouseEnter(1)"onmouseleave="mouseLeave(1)"></i><br>
					<form action="index.php" method="post" >
						<fieldset style="text-align:center;">
							<legend style="text-align:center;"><b>Registration<b></legend>
						
							<input type="text" placeholder="First name" name="" required="" class="popup_registration">		
							
							<input type="text" placeholder="Last name" name="" required="" class="popup_registration">	
							
							<input type="text" placeholder="user name" name="u_name" required="" class="popup_registration">
							
							<input type="text" placeholder="Phone Number" name="phone" required="number" class="popup_registration" >
							
							
							<input type="password" placeholder="Enter passward" name="pass" required=""  style="color:black;width:84%;height:35px;background:white; margin-top:15px;border:1px solid #b1cdcd;font-size:14px;">
							
							
							<input type="password" placeholder="Confirm passward" name="c_pass" required="" style="color:black;width:84%; height:35px;background:white; margin-top:15px;border:1px solid #b1cdcd;font-size:14px;">
							
							<button style="margin:0 auto;height:35px;margin-top:15px; background:mediumseagreen; color:white" name="reg">Registration Now
							</button>
						</fieldset>
					</form>
					
				</div>
			</div>
			<div id = "forget_password_pop_up" class="popup_main_div">
				<div class="popup_registration_div">
					<i id="close_color1" style="float:right; cursor:pointer;" class="fa fa-close" onClick="forget_work(2)" onmouseenter="mouseEnter(2)"onmouseleave="mouseLeave(2)"></i><br>
					<form>
						<fieldset style="text-align:center;">
							<legend style="text-align:center;"><b>Reset your password<b></legend>
							
							<p>Enter your user account's verified email address and we will send you a password reset link.</p>
							
							<input type="text" placeholder="Enter Your Email Address" name="" required="" class="popup_registration" class="popup_registration">		
							
							<button style="margin:0 auto;height:35px;margin-top:15px; background:mediumseagreen; color:white">Recover
							</button>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="header_side">
				<header >
					<h2 class="welcome">WELCOME!</h2>
					<h5 style="color: black;">to pharmacy management system</h5>
				</header>
			</div>
			
			<div class="middle">
				
				<div class="loginBox">
					<img src="image\\loginlogo.jpg" alt="" class="circle">
					<h1>Login Here</h1>
					
				<form action="index.php" method="post" enctype="multipart/form-data">
					<p> Name : </p>
					<input type="text" placeholder="Enter name" name="username" required="" style="width:90%;">
					<p> Passward : </p>				
					<input type="password" placeholder="Enter password" name="password" required="">
					<a ><input type="submit" name="go" value="Login"></a>
					</br></br></br></br>
					<a href="#" onClick="forget_work(1)"><p>forgot your passward</p></a>
					<a href="#" onClick="registration_work(1)"> <p>registration here</p></a>
				</form>
				</div>
			</div>
			
			<div class="footer" >
				<div  class="footer_right">
					<img src="image\\IMG-20190127-WA0002.jpg" alt="" class="circle"><br><br>
					<h6 style="text-align:right;color:white; padding-right:5px;">Developed by Md Abu Shahan</h6>
				</div>
				<div class="footer_left">
					<h2 style="color:#6AE545; text-align:center;">
						Contact
					</h2>
					<h5 style="color:white; text-align:center;">
						Phone: 0170384436
					</h5>
					<h5 style="color:white; text-align:center;">
						Email: shahanahmed668@gmail.com
					</h5>
					
				</div>	
			</div>
		</div>
	</body>
</html>