<?php
//Variables
$host		= 'localhost';
$user		= 'root';
$pass		= '';
$database	= 'dbFer'; 
$page=$_POST['B'];

echo "<table style='width:485px;height:482;border: solid 2px black;'>";
echo "<tr><th>Name</th> <th>Mensaje</th></tr>";
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:500px;border:2px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
} 

//Conection
   $conn = new PDO("mysql:host=$host;dbname=$database", $user);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if (isset($_POST['enviar'])) {
				
		$nombre = $_POST['user'];//htmlspecialchars($_POST['user']);
		$mensaje = $_POST['mensaje'];//htmlspecialchars($_POST['mensaje']);

		$consulta = "INSERT INTO msg (user, mensaje) VALUES ('$nombre', '$mensaje')";
		//$ejecutar = $conn->query($consulta);

		/*	if ($ejecutar) {
				echo "Success!";
			}*/
	}

	$sql="SELECT * FROM msg";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    
    $result = $stmt->fetchAll();
    foreach($result as $row){
    	echo (
    		"<tr>".
    		"<td>".$row['user']."</td>".
    		"<td>".$row['mensaje']."</td>"."</tr>"
    	);
    }
    
echo "</table>";
?>

<form action="./chat.php" method="POST">

			<input type="text" name="user" placeholder="Enter your Name"><br><br>			
			<textarea name="mensaje" placeholder="Enter your Message"></textarea><br><br>
			<input type="submit" name="enviar" value="Submit">	
</form>