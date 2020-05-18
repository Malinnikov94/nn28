<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопутимая длинна логина!";
    exit();
  }
?>
