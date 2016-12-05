<?php
   include_once("DBConnection.php");
   //include_once("session.php");
   $db = new DBConnection();
   echo "hola";
   $dbc = $db->Connect();
   $sql = "select * from cuenta where id_usuario=" . "1";
   if ($result = $dbc->query($sql)){
	   // output data of each row
	   $json = '{"items":[';
	   $boo = 0;
	   while($r = $result->fetch_assoc()){
		   if($boo){
			   $json = $json . ',';
		   }
		   $json = $json . json_encode($r);
		   $boo = 1;

	   }

	   $json = $json . ']}';
     echo $json;
   } else {
     echo 0;
   }
?>
