<?php 
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
    
    if(isset($_GET['login'])) {
        $email = $_POST['email'];
        $passwort = $_POST['passwort'];

if ($email == 'bla' && $passwort == 'blubb') {

}

// SQL, WHERE, UND/AND

        // $statement1 = $pdo->prepare("SELECT * FROM test WHERE email = :email ");
        // $statement2 = $pdo->prepare("SELECT * FROM test WHERE passwort = :passwort ");
        // $statement1->execute(array(":email" => $email));
        // $statement2->execute(array(":passwort" => $passwort));
        // $user = $statement1 = $statement2->fetch();

        $statement1 = $pdo->prepare("SELECT * FROM test WHERE email = :email_in and passwort = :passwort_in");
        $statement1->execute(array(":email_in" => $email, ":passwort_in" => $passwort));

        $user = $statement1 ->fetch();

        if ($user == true) {
            die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>'
            );
        } else {
            $errorMessage = "E-Mail oder Passwort war ungültig<br><br>";
        }

    }

?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Login-PHP</title>
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>