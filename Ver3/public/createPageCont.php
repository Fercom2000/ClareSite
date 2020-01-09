<?php
//echo "<link rel='stylesheet' type='text/css' href='./css/exam.css'>";

$page=(int)htmlspecialchars(check('page'));

if($page>0){
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

	$sql = "SELECT * from element WHERE pageCode=$page AND description='$page Cont';";
	//echo $sql;
	$result=$conn->query($sql); 
	echo "<form action='./mainT2.php' method='POST'>";
	if($result->num_rows>0) {
		while ($row=$result->fetch_assoc()) {
			echo ("<".$row['type']." class='".$row['class']."' name='".$row['elementName']."' id='".$row['eId']."' style='".$row['style']."' value='".$row['value'].".'>".$row['message']."</".$row['type'].">");
		}
	}else{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo "</ul></form>";
	$conn->close();
}

/*<ul class="menuL">
			<li class='menuL active'><span class='menuL'><a class='menuL' href='users.php'>Users</a></span></li>
			<li class='menuL'><span class='menuL'><a class='menuL' href='groups.php'>Groups</a></span></li>
			<li class='menuL'><span class='menuL'><a class='menuL' href='students.php'>Students</a></span></li>
			
			<li class='menuL'><span class='menuL'><a class='menuL' href='exams.php'>Exams</a></span></li>
		</ul>*/
?>
