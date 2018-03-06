<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

    if(!empty($_POST["username"]) && !empty($_POST["password"])) 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username == 'admin' && $password == 'password') 
        {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: index.php');
        }
        else {
            header('Location: connexion.php');
        }
        
    } 
    else 
    {
        header('Location: connexion.php');
    }
} 
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PIKA</title>
        <meta name="PIKA" content="PIKA website">
        <link rel="stylesheet" href="main.css">
        
        <script type="text/javascript">

        </script>

    </head>
    <body>
        <form id="login" method="post">
        <h1>Connexion</h1>
        <h3>Identifiant</h3>
        <input id="username" name="username" type="text" placeholder="id" required />
        <h3>Mot de passe</h3>
        <input id="password" name="password"type="password" placeholder="mdp" required /> 
        <br />
        <input type="submit" value="Connecter" /> 
        </form>
    </body>
</html>
