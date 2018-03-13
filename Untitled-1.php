<?php 
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
    
    if(isset($_GET['login'])) {
        $email = $_POST['email'];
        $passwort = $_POST['passwort'];

if ($email == 'bla' && $passwort == 'blubb') {

}
    // Email wird geprüft

// SQL, WHERE, UND/AND
        $statement1 = $pdo->prepare("SELECT * FROM test WHERE email = :email ");
        $statement2 = $pdo->prepare("SELECT * FROM test WHERE passwort = :passwort ");
        $statement1->execute(array(":email" => $email));
        $statement2->execute(array(":passwort" => $passwort));
        $user = $statement1 = $statement2->fetch();

if (is_array($user)) {
    print $user['nachname'];
}
var_dump ($user);
   
   
$statement1 = $pdo->prepare("SELECT * FROM test WHERE email = :email "&&"SELECT * FROM test WHERE passwort = :passwort");
$statement1->execute(array(":email" => $email));
$user = $statement1->fetch();

    



        // if (is_array($user)) {
        //     print "1";
        //     if (is_array($pass)) {
        //         if ($user['id'] == $pass['id']) {
        //             print "3";
        //             // Gültiger Benutzer/Passwort
        //         }
        //     } 
        // }

    // Beides wird zusammen geprüft auf richtigkeit

        if ($user == true ) {
            $_SESSION['userid'] = $user['id'];
            die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
        } else {
            $errorMessage = "E-Mail oder Passwort war ungültig<br>";
        }

    }

?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
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