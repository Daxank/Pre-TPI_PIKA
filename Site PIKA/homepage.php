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
        <div class="container-border container-fluid" id="storetable">
            <div class="row">
                <div class="col col-lg-9">
                    <div class="container" id="leftmenu">
                        <?php
                        $query="SELECT Nom_bonnet, Prix, Image_grande, Image_petite FROM bonnet;";
                        $bonnets = $dbh->query($query) or die ("SQL Error in:<br> $query<br>Error message".$dbh->errorInfo()[2]);
                        while ($bonnet = $bonnets->fetch())
                        {
                            extract ($bonnet);
                            echo "<br><div class='container' id='product'><img src='' $Nom_bonnet</div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="container" id="rightmenu">
                        <h2>Panier</h2>
                        <div class="row">
                            <div class="container" id="basket">

                            </div>
                        </div>
                        <div class="row">
                            <form>
                                <input type="submit" value="Commander">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
