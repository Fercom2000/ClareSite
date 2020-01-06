<?php
function check($v){
	if(isset($_POST[$v])){
	    return $_POST[$v];
	}
	return "";
}
function generateKey($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$pC=htmlspecialchars(check('pageCode'));
$eC=htmlspecialchars(check('examCode'));
$pass=htmlspecialchars(check('pass'));
$status=htmlspecialchars(check('status'));
$type=htmlspecialchars(check('type'));
$supervisor=htmlspecialchars(check('supervisor'));
$description=htmlspecialchars(check('description'));

/*echo "User:".$user." Name:".$name." Permissions:7777 Pass:".$pass." Status:".$status." Type:".$type." Profile:".$profile." Supervisor:".$supervisor." ".$supervisor." ".$pr2;
$per=7777;*/

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

$sql = "INSERT INTO page (pageCode, examCode,status,type,description,createdBy,updatedBy)
VALUES ('$pC','".$eC."','".$status."','".$type."','".$description."','".$supervisor."','".$supervisor."')";

if ($conn->query($sql) === TRUE) {
	echo "New page created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();