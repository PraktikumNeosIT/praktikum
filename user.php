 
<?php 
session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

if(isset($errorMessage)) {
    echo $errorMessage;
}

if (isset($_SESSION['id=4']) == true) {

    echo " RICHTIG! ";
    $sql = "SELECT * FROM test";
    foreach ($pdo->query($sql) as $row) {
    echo '<a href="user.php?id=' . $row['id'] . '">Email: ' . $row['email'] . '</a><br>';
    echo "Passwort: ".$row['passwort']." <br><br>";

    }    

} else {
echo " FALSCH! ";
};      

 
?>