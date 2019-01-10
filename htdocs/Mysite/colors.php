
<?php
echo file_get_contents("html/header.html");

$colors = [
	'brown' => "#633517",
	'orange' => "#a6001a",
	'schoolbus' => "#ee9600",
	'yellow' => "#ffab00",
	'green' => "#004d33",
	'blue' => "#00477e"
];
	foreach($colors as $colorname => $colorcode){
		echo "
		<div style='background-color: $colorcode; color: white;'>$colorname</div>";	
	}
echo file_get_contents("html/footer.html");

