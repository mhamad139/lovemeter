<!DOCTYPE html>
<html>
<head>
	<title>result</title>
	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
			background-color: #FFFFF7;
			font-family: 'Poppins',sans-serif;
			font-size: 20px;
			color: black;
		}
		.container{
			position: absolute;
			transform: translate(-50%,-50%);
			top: 50%;
			left: 50%;
			background-color: #FFFFF7;
			margin: 5px;
			padding: 5px;
			box-shadow: 0px 0px 11px 3px #000000;
		}
		.image{
			width: 200px;
			height: 200px;
		}
		img{
			width: 100%;
			display: block;
		}
		.three{
			position: absolute;
			top: 58%;
			left: 50%;
			transform: translate(-50%,-50%);
			font-size: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php 
	$nameo = $_POST['name1'];
	$namet = $_POST['name2'];
	echo "percentage of love between"."<br>";
	echo "<center>$nameo. & .$namet</center>";

		 ?>
		<br>
		<center><div class="image">
			<a href=""><img src="pic.png"></a>
			<?php

			$rand = rand(1,100);
			echo "<div class = 'three'>$rand.'%'</div>.";
	
			?>
		</div></center>
	</div>
</body>
</html>