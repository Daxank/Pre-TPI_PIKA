<?php
require_once('fonctions.php');
ConnectDB();
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
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
            var adminclick = 0;

            function add()
            {
                adminclick++;

                if(adminclick==5)
                {
                    window.open("connexion_admin.php","_self");
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
        <div class="container container-fluid">
            <div class="alert alert-danger col-md-8">test</div>
            <div class="alert alert-danger col-md-4">test2</div>
        </div>
    </body>
</html>
