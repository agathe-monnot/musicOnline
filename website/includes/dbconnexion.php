<?php

// server, username, password, database
$con = mysqli_connect("localhost", "root", "root", "music_online");

// if connection fail, display message
if (mysqli_connect_errno()) {
    die("failed to connect to MySql: " .mysqli_connect_errno());
}

?>