<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
</head> 
<body>
 
<?php 
session_start();

$erlaubteBenutzer = array(/* key => benutzername, value => passwort */
    'nico' => '1',
    'finn' => 'Hallo'
);
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
}

?>

<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<?php 
if(isset($_POST['email'])) {
    print_r ($_POST['email']);
    if ($_POST['email'] == 'nico') {

}
}

var_dump ($_POST);

if ($email == 'nico'){
    $hatGueltigesLogin = true;
} 

if ($hatGueltigesLogin == true) {
var_dump ($hatGueltigesLogin);
    die("Angemeldet");
}



?>

<form action="?login=1" method="post">
E-Mail:<br>
<input type="text" size="40" maxlength="250" name="email"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>

<input type="submit" value="Abschicken">
</form> 
</body>
</html>



|-------------------------|
|                         |
|                         |
|                         |
|                         |
|                         |
|                         |
|                         |
|                         |
|                         |
|                         |
|                   ___   |
|                         |
|                         |
|                         |
|                         |
|                         |
|                         |
|                         | 