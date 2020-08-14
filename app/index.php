<?php

$mysqli_connection = new MySQLi('AvocadoNCMySQL', 'AvocadoNC', 'Avocadonc', 'AvocadoNC');
if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}

