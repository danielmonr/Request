<?php
   include_once("DBConnection.php");
   include_once("session.php");
   $db = new DBConnection();
   $dbc = $db->Connect();
   $sql = "select * from cuenta where id_usuario=" . $_SESSION['login_user'];
   if ($result = $dbc->query($sql)){
	   // output data of each row
	   $json = '{"items":['
	   while($r = $result->fetch_assoc()){
		   $json = $json . json_encode($r);
	   }

	   $json = $json . ']}'
     echo $json;
   } else {
     echo 0;
   }
?>
