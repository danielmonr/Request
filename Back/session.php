<?php
    session_start();
    //print("Se está corriendo<br/>");
    if(!isset($_SESSION['user_type'])){
        header("location: http://ubiquitous.csf.itesm.mx/~daw-1021514/content/Request/FRONT/login.html");
	}
?>
