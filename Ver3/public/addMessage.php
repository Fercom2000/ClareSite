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
$id=htmlspecialchars(check('id'));
$class=htmlspecialchars(check('class'));
$img=htmlspecialchars(check('img'));
$time=htmlspecialchars(check('time'));
$message=htmlspecialchars(check('message'));
$supervisor=htmlspecialchars(check('supervisor'));

$code='<div class="'.$class.'" id="'.$id.'" name="'.$id.'">
    <img src="'.$img.'" alt="Avatar">
    <p>"'.$message.'"</p>
</div>
<script type="text/javascript">
    $(document).ready(function(){       
        setTimeout(() => {   
            $("#'.$id.'").fadeIn();
            var element = document.getElementById("MessageBox");
            element.scrollTop = element.scrollHeight;
        }, '.$time.');
    });
</script>';

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

$sql = "INSERT INTO element ( elementName,pageCode,description,createdBy,updatedBy,class,img,timeD,message)
VALUES ('$id','$pC','Chat Message','$supervisor','$supervisor','$class','$img','$time','$message')";
//echo htmlspecialchars($sql);
if ($conn->query($sql) === TRUE) {
	echo "New page created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include('addChatMessage.html');
?>