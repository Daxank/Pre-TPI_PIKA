<?php defined('DS') OR die('No direct access allowed.');

$users = array(
 "admin" => "password"
);

if(isset($_POST['username'])) {
    if($users[$_POST['username']] !== NULL && $users[$_POST['username']] == $_POST['password']) {
  $_SESSION['username'] = $_POST['username'];
  header('Location:  ' . $_SERVER['PHP_SELF']);
    }else {
        //invalid login
  echo "<p>error logging in</p>";
    }
}
exit; 
?>
<!DOCTYPE html>
<html lang="en">
    
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
         <?php if($_SESSION['username']): ?>
            <p>You are logged in as <?=$_SESSION['username']?></p>
            <p><a href="?logout=1">Logout</a></p>
        <?php endif; ?>
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
                                    <input type="submit" name="submit" value="Connecter" id="buttonright" /> 
                                </td>    
                            </tr>
                        </form>
                </table>
            </div>
        </div>
    </body>
</html>
