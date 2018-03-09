    <?php
        if (isset ($_POST["nombre"])) // = Est-ce que nombre est défini ?
        {
            echo "Tu m'as envoyé la valeur ".$_POST["nombre"];
        }
    ?>
    <form id="Nb" name="FormNb" method="post">
        Nombre: <input type="text" name="nombre" value="0">
        <input type="submit" value="Go">
    </form>