/**
 * Documentation sur cet exercisse = http://www.lephpfacile.com/cours/18-les-sessions
 */
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'reunion_island';

$conn = new mysqli($servername, $username, $password);


if ($conn->error){
    echo 'Echec lors de la connexion à MySQL'.$conn->connect_error;
}else{
    $conn->select_db($dbname);
    echo "<p style='color: white'>Connection OK &#9829</p>";
}
echo $conn->error;

//===================================================//


$username_valide = $_POST["username"];
$password_valide = $_POST["password"];

//$username_valide = "moi";
//$password_valide = "pass";

function recupere_id_client($username, $password){
    $username_valide = $_POST['username'];
    $password_valide = $_POST['password'];
    $recup = "SELECT username, password FROM user WHERE username = $username_valide AND password = $password_valide";
}
recupere_id_client($username_valide,$password_valide);



if (isset($_POST['username']) && isset($_POST['password'])){

    if ($username_valide === $_POST['username'] && $password_valide === $_POST['password']){
        session_start();

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('location: check_login.php');

    }
    else {
        echo '<body onLoad = "alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0"; URL=index.html">';
    }
}
else{
    //echo 'Les variables du formulaire ne sont pas déclarées';
}


?>