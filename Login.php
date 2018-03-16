<?php 

    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

    if(isset($_GET['logout'])) {
        $_SESSION['angemeldet'] = false;
    }

    if(isset($_GET['login'])) {
        $email = $_POST['email'];
        $passwort = $_POST['passwort'];
   

        $statement1 = $pdo->prepare("SELECT * FROM test WHERE email = :email_in and passwort = :passwort_in");
        $statement1->execute(array(":email_in" => $email, ":passwort_in" => $passwort));

        $user = $statement1->fetch();

        if ($user === false) {
            $errorMessage = "E-Mail oder Passwort war ungültig<br><br>";
            $_SESSION['angemeldet'] = false;
            unset($_SESSION['vorname']);
        } else {
            $_SESSION['angemeldet'] = true;
            $_SESSION['vorname'] = $user['vorname'];
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
    $_SESSION['zaehler'] = false;

if (isset($_SESSION['angemeldet']) AND ($_SESSION['angemeldet'] == true)) {

    echo "<p>Hallo " . $_SESSION['vorname'] . ". Du bist angemeldet.</p>";

    $sql = "SELECT * FROM test";
    foreach ($pdo->query($sql) as $row) {
    echo 'Email: <a href="user.php?id=' . $row['id'] . '">'. $row['email'] .  '</a><br>';
    echo "Passwort: ".$row['passwort']." <br><br>";

    }    

} else {

?>

<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 

<?php
}

?>
</body>
</html>