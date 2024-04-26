
<?php
session_start();
 
$user = $_POST["user"];
$password = $_POST["pword"];
$hashed = password_hash($password,PASSWORD_DEFAULT);
echo $hashed;
//echo $user;
 
$answer = "$2y$10$09ZFKD0HMHaFykCBETG8wevA56BMJ9byp6NrkgN0r.H82TV7Pu/RO";

$vaild = password_verify($password,$answer);
echo $vaild;

    if ($vaild == true) {
        echo "Password Correct";
    }else{
        echo "Password Incorrect";
    }
    

$_SESSION["user"] = $user;
//header("Location:index.php")
?>

$2y$10$t00/k48s91W8qL9kB5f41eobus3S8RAZA2vaaVNC3AdHF9AjItrv.