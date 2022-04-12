<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Area of a Trapezoid</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Area of a Trapezoid</h1></center>';
			echo '<img src="./images/Area.svg" width="25%"/>';
			echo '<center><p>Formula for the area of a trapezoid.</center></p>';
			echo "<p><center>Fill out the text fields below and determine the area of the trapezoid</center></p>"; 
		?>
		<!-- Textfields -->
		<form method = "post">   
			Side (a) length: cm <input type="number" name="side-a" step="0.01">   
			<br><br>   
			Side (b) length: cm <input type="number" name="side-b" step="0.01">   
			<br><br>
			Height (h): cm <input type="number" name="height" step="0.01">  
			<br><br>
			<!-- Button -->
			<input type = "submit" name = "enter" value="Calculate">    
			<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$sideA = $_POST['side-a'];   
				$sideB = $_POST['side-b']; 
				$height = $_POST['height'];
				$area = ($sideA + $sideB) * $height / 2;
				$area = round($area, 2);
				echo "<br><br>The area of the trapezoid ". $area ." cm²";
			}
		?>
	</body>
</html>