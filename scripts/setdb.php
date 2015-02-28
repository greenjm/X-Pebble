<?php
try{
  	$db = new PDO ("sqlsrv:server = tcp:pqaeo749p6.database.windows.net;port=1433; Database = XPebbleDatabase", "greenjm", "AW#zse4xdr5");
  	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) { 
    print("Error connecting to SQL Server.");
  	die(print_r($e));
  }
?>