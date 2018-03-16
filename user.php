 <?php 
session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');


$id = $_GET ['id'];


    
        $statement1 = $pdo->prepare("SELECT * FROM test WHERE id = :id_in");
        $statement1->execute(array(":id_in" => $id));
        $row = $id = $statement1->fetch();


        if ($id === "3"); {
            echo "ID: ";
            echo $row[0].' <br>Email: '.$row[1].' <br>Passwort: '.$row[2].' <br>Vorname: '.$row[3].' <br>Nachname: '.$row[4].'<br />';
            echo "<br>";

}

?>