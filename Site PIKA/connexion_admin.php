<?php
require_once('fonctions.php');
admin();
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
                        <input id="username" name="username" size=75% type="text" placeholder="id" required/>
                        <h3>Mot de passe</h3>
                        <input id="password" name="password" size=75% type="password" placeholder="mdp" required/>
                        <br/><br/>
                        <input type="submit" id="buttonright" value="Connecter"/>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
