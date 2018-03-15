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
        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="/js/bootstrap.js"></script>
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
        <table id="storetable">
            <tr>
                <td>
                    <table>
                        <tbody id="leftmenu">
                            <tr>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                                <td class="product">
                                    placeholder
                                </td>
                            </tr>
                            <tr>
                                <td class="product">
                                    placeholder
                                </td>
                            </tr>
                            <tr>
                                <td class="product">
                                    placeholder
                                </td>
                            </tr>
                    </table>
                </td>
                <td>
                    <table id="rightmenu">
                        <tr>
                            <td>
                                <h3>Panier</h3>
                                <table id="basket">
                                    <tr>
                                        <td>
                                            placeholder
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="rightmenbot">
                            <td>
                                <input type="submit" value="Commander" class="buttonright" id="buttonbig">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
