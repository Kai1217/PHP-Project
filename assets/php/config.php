<?php

define("SERVER", "localhost");
define("USER", "root");
define("PWORD", "");
define("DB", "videoproject");


$conn = new mysqli(SERVER, USER, PWORD, DB);

if ($conn->connect_error)
{
    die("Could not connect to the MySQL Server " . $conn->connect_error); 
}