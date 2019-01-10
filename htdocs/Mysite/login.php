<?php
echo file_get_contents("html/header.html");

$users = [];

$file = fopen("loginusers.txt","r");
while (!feof($file)) {
	$line = trim(fgets($file)); 
	$exploded = explode("/", $line, 2);
	$user = $exploded [0];
	$password = $exploded [1];
	$users[$user] = $password;
}

$uname = $_POST["uname"];
var_dump ($users);
if(isset($users[$uname])){
	if ($_POST["psw"] == $users[$uname]){
		echo "Welcome $uname!";
} else {
		echo "User and pass don't match";
	}
} else {
	echo "invalid user.";
}

echo file_get_contents("html/footer.html");
