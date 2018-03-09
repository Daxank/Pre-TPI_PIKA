<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='admin' && $password=='password') 
    {
        echo "<script>window.open('administration.php','_self')</script>";
    }
    else
    {
        echo "<script>alert(\"Le nom de compte ou mot de passe semble incorrecte\")</script>"; 
        $username=null;
        $password=null;
    }
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
        <div id="tableContainer-1">
            <div id="tableContainer-2">
                <table id="myTable">
                    <tr>
                        <td>
                            <form id="login" method="POST">
                                <h1>Connexion</h1>
                                <h3>Identifiant</h3>
                                <input id="username" name="username" size=75% type="text" placeholder="id" required />
                                <h3>Mot de passe</h3>
                                <input id="password" name="password" size=75% type="password" placeholder="mdp" required /> 
                                <br /><br />
                                <input type="submit" class="buttonright" value="Connecter" id="submit"/> 
                            </form>
                        </td>    
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
