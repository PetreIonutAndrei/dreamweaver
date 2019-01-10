<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	date_default_timezone_set("Europe/Bucharest");
	echo date("Y-m-d H:i:s").'<br>';
	
$colors = ["red", "green","blue","magenta","black"];
	foreach ($colors as $color){
		echo "<div style=\"color: $color;\">$color</div>";
	}
	
for ($j=1; $j<=9; $j++){
	echo "<div>";
	for($i=1; $i <= 9; $i++){
		
		echo "$j x $i =". $j * $i.'<br>';
		
	}
	echo "</div>";
}
?>
<body>
</body>
</html>