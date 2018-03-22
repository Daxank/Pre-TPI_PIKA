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

        function add() {
            adminclick++;

            if (adminclick == 5) {
                window.open("connexion_admin.php", "_self");
            }
            else {
                if (adminclick == 1) {
                    setTimeout(reset, 1000);
                }
            }
        }
        function reset() {
            adminclick = 0;
        }
    </script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-9">
                        <span class="containerlogo">
                            <img class="logo" src="imgs/logo.png" onclick="add()">
                        </span>
        </div>
        <div class="col col-lg-3">
            <div class="btn-group float-right">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    Palette de couleurs
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </button>

                <ul class="dropdown-menu">
                    <?php
                    $query = "SELECT Nom_couleur, Image_couleur FROM Couleur;";
                    $couleurs = $dbh->query($query) or die ("SQL Error in:<br> $query<br>Error message" . $dbh->errorInfo()[2]);
                    while ($couleur = $couleurs->fetch()) {
                        extract($couleur); // $Nom_couleur, $Image_couleur
                        echo "<li>
                                <a href='#' title='$Nom_couleur'><img src='imgs/color/$Image_couleur.jpg'>$Nom_couleur</a>
                            </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-border container-fluid" id="storetable">
    <div class="row">
        <div class="col col-lg-9">
            <div class="container" id="leftmenu">
                <?php
                $query = "SELECT Nom_bonnet, Prix, Image_grande, Image_petite, Description FROM bonnet;";
                $bonnets = $dbh->query($query) or die ("SQL Error in:<br> $query<br>Error message" . $dbh->errorInfo()[2]);
                while ($bonnet = $bonnets->fetch()) {
                    extract($bonnet); // $Nom_bonnet, $Prix, $Image_grande, $Image_petite, $Description
                    echo "<br><div class='container text-center' id='product'>
                                                <form method='post'>
                                                        <img src='imgs/$Image_grande.jpg' id='imgsize' title='$Nom_bonnet: $Description' class='mx-auto d-block'>
                                                        <input type='submit' value='+' class='float-right'>
                                                        <h3 class='float-right'>$Prix CHF</h3>
                                                </form>
                                            </div>";
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
                    <div class="container">
                        <form method="post">
                            <input class="float-right" type="submit" value="Commander">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
