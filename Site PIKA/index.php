<?php
require_once('connexion.php');
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
