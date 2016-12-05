<?php
    include_once('DBConnection.php');
    $db = new DBConnection();
    $dbc = $db->Connect();
    session_start();
    //print("Se está corriendo<br/>");
    if(!isset($_SESSION['login_user'])){
        header("location: http://ubiquitous.csf.itesm.mx/~daw-1021514/content/Request/FRONT/login.html");
    }
?>
