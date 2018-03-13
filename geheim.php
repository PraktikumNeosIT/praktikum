<?php 
session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

 
$sql = "SELECT * FROM test ";
foreach ($pdo->query($sql) as $row) {
   echo "E-Mail: ".$row['email']."<br>";
   echo "Passwort: ".$row['passwort']." <br><br>";
}
?>