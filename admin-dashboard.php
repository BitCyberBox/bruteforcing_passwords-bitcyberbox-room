<?php
session_start();
$username = $_SESSION['user'];
$password = $_SESSION['pass'];
if($username != 'admin'){
  header("Location: /");
}
else {
  echo("Here's your flag : bcb{12532ae98a209fcb8e677258429c2b03}");
}
