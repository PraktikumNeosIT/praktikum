 
<?php 
session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

// if(isset($errorMessage)) {
//     echo $errorMessage;
// }




// if (isset($_GET['id'])) {
//     (isset($_GET['email']));
//     (isset($_GET['passwort']));
//          echo $_GET['email'];
//          echo $_GET['id'];
//          echo $_GET['passwort'];
//          $email = "3";
//          $passwort = "2";
         
        

 if(isset($_GET['login'])) {
    // $id="1";
    $id <= "1";

    // echo " RICHTIG! ";
    // // SELECT * FROM test WHERE id = :id
    // $hi = $pdo->prepare("SELECT * FROM test WHERE id = :id_in");
    
    // $id = null;
    // $test1 = [":id_in"];
    // $hi->execute(array(":id_in" => $test1));
    

        $statement1 = $pdo->prepare("SELECT * FROM test WHERE id => :id_in");
        $statement1->execute(array(":id_in" => $id));
        $id = $statement1 ->fetch();


            print_r ($id);
            print_r ("1");
            var_dump ($id);
            var_dump ("1");
            echo ($id);
            echo ("1");

        if ($id === "1"){ 
           
            print_r ($id);
            print_r ("1");

    echo '<p>1</p>';
        
        }

                if ($id == 3){ 
           
            print_r ($id);
            print_r ("2");
        
    echo '<p>3</p>';
        }

                if ($id == 4){ 
           
            print_r ($id);
            print_r ("3");
        
    echo '<p>4</p>';
        }

}
       



    // echo $_GET($id);
    // echo $_GET($email);
    // echo $_GET($passwort);
    // echo $_GET($id);

    // }

// else {
// echo " FALSCH! ";
// };      

 
?>