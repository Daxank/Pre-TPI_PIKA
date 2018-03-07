<?php 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('connexion.php');

// everything below will show after correct login 
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
        var adminclick = 0;
            
        function add()
            {
                adminclick++;
                
                if(adminclick==5)
                {
                    window.open("connexion.php","_self");
                }
                else
                {
                    if(adminclick==1)
                    {
                        setTimeout(reset, 1000);
                    }
                }
            }
        function reset()
        {
            adminclick = 0;
        }
        </script>

    </head>
    <body>
        <span class="containerlogo">
        <img class="logo" src="imgs/logo.png" onclick="add()">
        </span>
    </body>
</html>
