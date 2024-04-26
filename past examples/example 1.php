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


        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $user = $_POST["user"];
        }else{
            $user = "Robbie";
        }

        echo "<p> Good Afternoon: $user</p>"
    ?>

    <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">

<input type ="text" name="user">
<input type="sumbit">
</form>
</body>
</html>
