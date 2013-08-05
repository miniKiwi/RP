<html>

<head>
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>

<body>

<?php


$username = "stefanlindh_se";
$password = "08jol31hft2";
$hostname = "stefanlindh.se.mysql";
$dbname = "stefanlindh_se";

/* We don't need a connection to determine
   the version of mysql client library */

printf("Client library version: %d\n", mysqli_get_client_version());

print_r(PDO::getAvailableDrivers());



?>


</body>
</html>