<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();
   session_start();
   $valid = false;
   //print("entro<br/>");
   $res = $_POST['data'];
   $myusername = $res[0]["value"];
   $mypassword = $res[1]["value"];
   $sql_admin = "SELECT * FROM admins WHERE username = '$myusername' and password = '$mypassword' limit 1";
   $sql_cliente = "SELECT * FROM clientes WHERE email = '$myusername' and password = '$mypassword' limit 1";
   $sql_empresa = "SELECT * FROM empresas WHERE nombre = '$myusername' and password = '$mypassword' limit 1";
   //print("<br/>".$sql . "<br/>");
   if($result = $dbc->query($sql_admin)){
    $user = $result->fetch_assoc();
	$_SESSION['login_user'] = $user["id"];
	$_SESSION['user_type'] = 1;
    echo 1;
   }
   elseif($result = $dbc->query($sql_cliente)){
   	$user = $result->fetch_assoc();
	$_SESSION['login_user'] = $user["id"];
	$_SESSION['user_type'] = 2;
    echo 1;
   }
   elseif($result = $dbc->query($sql_empresa)){
   	$user = $result->fetch_assoc();
	$_SESSION['login_user'] = $user["id"];
	$_SESSION['user_type'] = 3;
   	echo 1;
   }
   else{
	   echo 0;
   }
?>
