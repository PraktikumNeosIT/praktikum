 
<?php 
session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');


$id = $_GET ['id'];

$id = "1";
    
        $statement1 = $pdo->prepare("SELECT * FROM test WHERE id = :id_in");
        $statement1->execute(array(":id_in" => $id));
        $id = $statement1->fetch();


        if ($id == "2"); {
            echo "ID: ";
            var_dump ($id);
            echo "<br>";

}

?>