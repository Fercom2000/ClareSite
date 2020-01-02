<?php

$user=htmlspecialchars($_POST['user']);
$name=htmlspecialchars($_POST['name']);
$pass=htmlspecialchars($_POST['pass']);
$status=htmlspecialchars($_POST['status']);
$type=htmlspecialchars($_POST['type']);
$supervisor=htmlspecialchars($_POST['supervisor']);
$profile=htmlspecialchars($_POST['profile']);
$pr1=htmlspecialchars($_POST['pr1']);
$pr2=htmlspecialchars($_POST['pr2']);
$pr3=htmlspecialchars($_POST['pr3']);
$pr4=htmlspecialchars($_POST['pr4']);
$pr5=htmlspecialchars($_POST['pr5']);
$pr6=htmlspecialchars($_POST['pr6']);
$pr7=htmlspecialchars($_POST['pr7']);
$pr8=htmlspecialchars($_POST['pr8']);
$pr9=htmlspecialchars($_POST['pr9']);
$pr10=htmlspecialchars($_POST['pr10']);
$pr11=htmlspecialchars($_POST['pr11']);
$pr12=htmlspecialchars($_POST['pr12']);

echo $user." ".$name." ".$pass." ".$status." ".$type." ".$supervisor." ".$profile." ".$pr1." ".$pr2;
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