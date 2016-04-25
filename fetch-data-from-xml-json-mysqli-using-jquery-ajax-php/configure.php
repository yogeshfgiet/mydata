<?php
define('DB_SERVER', 'localhost'); // Your Database host
define('DB_USERNAME', 'root'); // Your Database user name
define('DB_PASSWORD', ''); // Your Database password
define('DB_DATABASE', 'demo'); // Your Database Name

$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); // Connection
?>