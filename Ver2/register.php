<?php
function check($v){
	if(isset($_POST[$v])){
	    return $_POST[$v];
	}
	return "";
}

$user=htmlspecialchars(check('user'));
$name=htmlspecialchars(check('name'));
$pass=htmlspecialchars(check('pass'));
$status=htmlspecialchars(check('status'));
$type=htmlspecialchars(check('type'));
$supervisor=htmlspecialchars(check('supervisor'));
$profile=htmlspecialchars(check('profile'));
$pr1=htmlspecialchars(check('pr1'));
$pr2=htmlspecialchars(check('pr2'));
$pr3=htmlspecialchars(check('pr3'));
$pr4=htmlspecialchars(check('pr4'));
$pr5=htmlspecialchars(check('pr5'));
$pr6=htmlspecialchars(check('pr6'));
$pr7=htmlspecialchars(check('pr7'));
$pr8=htmlspecialchars(check('pr8'));
$pr9=htmlspecialchars(check('pr9'));
$pr10=htmlspecialchars(check('pr10'));
$pr11=htmlspecialchars(check('pr11'));
$pr12=htmlspecialchars(check('pr12'));

echo "User:".$user." Name:".$name." Permissions:7777 Pass:".$pass." Status:".$status." Type:".$type." Profile:".$profile." Supervisor:".$supervisor." ".$supervisor." ".$pr2;
$per=7777;

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "clare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (userCode, userName, permissions,status,type,profile,addedBy,modifiedBy)
VALUES ('$user','".$name."','".$per."','".$status."','".$type."','".$profile."','".$supervisor."','".$supervisor."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();