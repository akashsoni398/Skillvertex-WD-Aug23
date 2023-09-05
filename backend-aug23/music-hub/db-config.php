<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "music-hub";
    
$conn = mysqli_connect($hostname,$username,$password,$database);

if(!$conn) {
    echo "Database not connected";
}

?>