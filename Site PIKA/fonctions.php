<?php
function ConnectDB()
{
    global $dbh;
    $hostname = 'localhost';
    $dbname = 'db_pika';
    $username = 'root';
    $password = '';

    $connectionString = "mysql:host=$hostname;dbname=$dbname";
    try
    {
        $dbh = new PDO($connectionString, $username, $password);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $dbh->exec("SET NAMES UTF8");
    }
    catch(PDOException $e)
    {
        die ("erreur de connexion au serveur (".$e->getMessage().")");
    }
}
function admin()
{
    if(!empty($_POST['username']) && !empty($_POST['password']))
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
}
function connected()
{
    if($username=='admin' && $password=='password') 
    {
    }
    else
    {
        $username=null;
        $password=null;
        echo "<script>window.open('homepage.php','_self')</script>";
    }
}
?>