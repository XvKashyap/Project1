<?php
session_start();
$_SESSION["username"]="Admin";

echo $_SESSION["username"];

session_unset();
$_SESSION["username"];

?>