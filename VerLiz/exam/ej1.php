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
    
    $sql="SELECT mensaje FROM `msg` WHERE user = 'Pagina2'";//id = 69 OR id=70 OR id=71 OR id=72 ";
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
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
