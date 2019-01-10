<?php
echo file_get_contents("html/header.html");

$file = fopen("songs-with-titles.txt","r");

echo "<select>";

do {
	$line = fgets ($file);
} while($line != null);

echo "</select>";

echo file_get_contents("html/footer.html");

