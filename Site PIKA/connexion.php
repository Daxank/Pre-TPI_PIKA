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
            window.open("index.php","_self");
        }
        else 
        {
            alert("Le mot de passe ou le nom d'utilisateur semble incorrecte")
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
        <link rel="shortcut icon" href="imgs/pika.png">
        <link rel="stylesheet" href="main.css">
        
        <script type="text/javascript">

        </script>

    </head>
    <body>
        <div id="tableContainer-1">
            <div id="tableContainer-2">
                <table id="myTable">
                        <form id="login" method="post">
                            <tr>
                                <td>
                                    <h1>Connexion</h1>
                                    <h3>Identifiant</h3>
                                    <input id="username" name="username" size=75% type="text" placeholder="id" required />
                                    <h3>Mot de passe</h3>
                                    <input id="password" name="password" size=75% type="password" placeholder="mdp" required /> 
                                    <br /><br />
                                    <input type="submit" value="Connecter" id="buttonright" /> 
                                </td>    
                            </tr>
                        </form>
                </table>
            </div>
        </div>
    </body>
</html>
