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

$sql = "SELECT * from student;";

$result=$conn->query($sql); 
$i=1;
if($result->num_rows>0) {
	echo("
		<table>
		<tr>
			<th></th>
			<th>Student Id</th>
			<th>Name</th>
			<th>Status</th>
			<th>Type</th>
			<th>Term start date</th>
			<th>Term end date</th>
			<th>Profile</th>
			<th>Enrolment date</th>
			<th>Last record upadate</th>
			<th>Last update by</th>
		</tr>
	");
	while ($row=$result->fetch_assoc()) {
		echo("
			<tr>
				<td>".$i."</td>
				<td>".$row['studentCode']."</td>.
				<td>".$row['studentName']."</td>.
				<td>".$row['status']."</td>.
				<td>".$row['type']."</td>.
				<td>".$row['dateStart']."</td>.
				<td>".$row['dateEnd']."</td>.
				<td>".$row['profile']."</td>.
				<td>".$row['dateEnrolment']."</td>.
				<td>".$row['dateUpdated']."</td>.
				<td>".$row['updatedBy']."</td>.
			</tr>
		");
		$i=$i+1;
	}
	echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();