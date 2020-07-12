<?php
  require_once("conn.php");

  if (
    empty($_POST['username']) ||
    empty($_POST['password'])
  ) {
    header('Location: login.php?errCode=1');
    die();
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = sprintf(
    "select * from users where username= '%s' and password = '%s'", $username, $password
  );
  $result = $conn->query($sql);
  if (!$result) {
    die($conn->error);
    }

if ($result->num_rows) {
  $expire = time() + 3600;
  setcookie("username", $username, $expire);
  header('Location: index.php');
  // 登入成功
}else {
  header('Location: login.php?errCode=2');
}
?>
