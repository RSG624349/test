<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MocktailDB Project</title>
</head>
<body>
    <?php 
        echo"<h1>Welcome to the MocktailDB Project</h1>";
        If(isset($_SESSION["user"])){
            $user = $_SESSION["user"];
        }else{
        $user = "Robbie";
        }
        echo "<p> Good Afternoon: $user</p>"
    ?>

<form method="post" action="validate.php">
<input type ="text" name="user">
<input type= "password" name="pword">
<input type="submit">
</form>
</body>
</html>
