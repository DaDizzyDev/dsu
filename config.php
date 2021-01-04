<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '85.10.205.173');
define('DB_USERNAME', 'vixenexploit');
define('DB_PASSWORD', 'RBLXVixenExploit654');
define('DB_NAME', 'vixenexploit');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>