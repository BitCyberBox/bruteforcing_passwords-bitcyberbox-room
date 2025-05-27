<?php
$username = $_GET['user'];
$password = $_GET['pass'];
if($username == 'admin'){
  if($password == 'admin'){
    session_start();
    $_SESSION['user'] = 'admin';
    $_SESSION['auth'] = 'admin';
    header('Location: admin-dashboard.php');
  }
  else {
    echo('Incorrect Password')
  }
}
else {
  echo('Incorrect Username or Password');
}
?>
