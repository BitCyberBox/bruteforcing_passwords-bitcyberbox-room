<?php
session_start();
if($username == ''){
  header("Location: index.html");
}
else {
  echo("Here's your flag : bcb{12532ae98a209fcb8e677258429c2b03}");
}
