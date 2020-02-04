<?php
//echo "<link rel='stylesheet' type='text/css' href='./css/exam.css'>";
error_reporting(E_ALL & ~E_NOTICE);
function check($v){
	if(isset($_POST[$v])){
	    return $_POST[$v];
	}
	return "-1";
}
function checkP($v){
	if(is_numeric($v)){
	    return $v;
	}
	return NULL;
}
$page=(int)htmlspecialchars(check('page'));//Check if there is a numeric internal page id

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

	$sql = "SELECT * from element WHERE pageCode=$page AND description='$page Nav';";
	//echo $sql;
	$result=$conn->query($sql); 
	echo "<form action='./index.php' method='POST'> <ul class='menuL'>";
	if($result->num_rows>0) {
		while ($row=$result->fetch_assoc()) {
			echo ("<".$row['type']." class='".$row['class']."' name='".$row['elementName']."' id='".$row['eId']."' style='".$row['style']."' value='".$row['value'].".'>".$row['message']."</".$row['type'].">");
		}
	}else{
		if(!$conn->error){
	    	echo "<br>";//Shows an empty nav bar
	    }
	    echo $conn->error;//Only for test mode, do not include in final version
	}
	echo "</ul></form>";
	$conn->close();
}
/*
<button class='' name='B' id='B' style='' value='1'> </button><ul class="menuL">
			<li class='menuL active'><span class='menuL'><a class='menuL' href='users.php'>Users</a></span></li>
			<li class='menuL'><span class='menuL'><a class='menuL' href='groups.php'>Groups</a></span></li>
			<li class='menuL'><span class='menuL'><a class='menuL' href='students.php'>Students</a></span></li>
			
			<li class='menuL'><span class='menuL'><a class='menuL' href='exams.php'>Exams</a></span></li>
		</ul>*/
?>
