<?php

$serverName = "104.41.2.231,1433";
$databasename = "PruebaMistr";
$userName = "sa";
$userPassword = "Hdtingw145eyf73";

shell_exec("sqlcmd.bat $serverName $databasename $userName $userPassword");

echo "Exito en la conexion";

?>
