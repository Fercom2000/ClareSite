<?php
//include ('GTemplate.html')

$host       = 'localhost';
$user       = 'root';
$pass       = '';
$database   = 'dbFer'; 

//$users=$_POST['user'];
//$id=$_POST['id'];


try{
    $conn = new PDO("mysql:host=$host;dbname=$database", $user);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT mensaje FROM `msg` WHERE user = 'Pagina1'";//id = 69 OR id=70 OR id=71 OR id=72 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();//$stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    //if (isset($_POST['B1'])) {
                
        foreach($result as $row){//while ($row=$stmt->fetchAssoc()) {
            echo (
                "<tr>".
                //"<td>".$row['mensaje']."</td>".
               // "<td>".$row['mensaje']."</td>".
                "<td>".$row['mensaje']."</td>"."</tr>"
            );
        }
   // }
    if (isset($_POST['B1'])) {
                
        foreach($result as $row){//while ($row=$stmt->fetchAssoc()) {
            echo (
                "<tr>".
                //"<td>".$row['mensaje']."</td>".
               // "<td>".$row['mensaje']."</td>".
                "<td>".$row['mensaje']."</td>"."</tr>"
            );
        }
   }

  /*  $sql2="SELECT mensaje FROM `msg` WHERE user = 'Pagina2'";//id = 69 OR id=70 OR id=71 OR id=72 ";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();

    $result2 = $stmt2->fetchAll();//$stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($result2 as $row){//while ($row=$stmt->fetchAssoc()) {
        echo (
            "<tr>".
            //"<td>".$row['mensaje']."</td>".
           // "<td>".$row['mensaje']."</td>".
            "<td>".$row['mensaje']."</td>"."</tr>"
        );
    }

    $sql3="SELECT mensaje FROM `msg` WHERE user = 'Pagina3'";//id = 69 OR id=70 OR id=71 OR id=72 ";
    $stmt3 = $conn->prepare($sql3);
    $stmt3->execute();

    $result3 = $stmt3->fetchAll();//$stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($result3 as $row){//while ($row=$stmt->fetchAssoc()) {
        echo (
            "<tr>".
            //"<td>".$row['mensaje']."</td>".
           // "<td>".$row['mensaje']."</td>".
            "<td>".$row['mensaje']."</td>"."</tr>"
        );
    }
    // set the resulting array to associative
    
    /*foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }*/
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;








/*
$host		= 'localhost';
$user		= 'root';
$pass		= '';
$database	= 'dbFer'; 

//$users=$_POST['user'];
//$id=$_POST['id'];


try{
	$conn = new PDO("mysql:host=$host;dbname=$database", $user);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT mensaje FROM `comentarios` WHERE user = 'Div' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll();//$stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($result as $row){//while ($row=$stmt->fetchAssoc()) {
    	echo (
    		"<tr>".
    		//"<td>".$row['mensaje']."</td>".
           // "<td>".$row['mensaje']."</td>".
    		"<td>".$row['mensaje']."</td>"."</tr>"
    	);
    }
    /*foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }*/
//}catch(PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}
//$conn = null;

?>

