<!DOCTYPE html>
<html>
	<head>
		

	</head>
	<body>


<div style="width:100%;height:auto;float:left;">
			<?php
				date_default_timezone_set("Asia/Dhaka");
				$date=date("d-m-Y");
				//echo date("d-m-Y");
				
				$time=date("h:i:sa");
				echo $date;
				echo $time;
			?>
			
			
			<div style="text-align:center;padding:1em 0;"> 
				<h3>
					<a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/timezone/asia--dhaka"></a>
				
				</h3> 
				<iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FDhaka" width="100%" height="115" frameborder="0" seamless></iframe> 
			</div>
</div>
</body>
</html>
