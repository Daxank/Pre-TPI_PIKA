<?php
require_once('fonctions.php');
ConnectDB();
// connected();
if (!empty($_POST['disconnect'])) {
    echo "<script>window.open('homepage.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PIKA</title>
    <meta name="PIKA" content="PIKA website">
    <link rel="shortcut icon" href="imgs/logo.png">
    <link rel="stylesheet" href="main.css">
</head>
<body>
        <span class="containerlogo">
            <img class="logo" src="imgs/logo.png">
        </span>
        <form method="POST">
            <input type="submit" id="buttonright" name="disconnect" value="Déconnecter"/>
        </form>
</body>
</html>
