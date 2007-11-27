<?php

$cnMsSQL = mssql_connect('serverar', 'geuser', 'rr17agroyalca');

print_r($cnMsSQL);
 
mssql_select_db('AGA01',$cnMsSQL);
 
$q = "select almacen.* from almacen";
$regs = mssql_query($q);

$rows = mssql_fetch_array($regs); 

print_r($rows);

//$dbh = new PDO('mssql:host=LHERNANDEZ;dbname=AGA01', 'luelher', '797965');

//print_r($dbh);
 
?>
