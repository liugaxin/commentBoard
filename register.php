<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>留言板</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
	<header class="warning">
  <strong>注意！本站為練習用網站，因教學用途刻意忽略資安實作，註冊時請勿使用任何真實的帳號或密碼。</strong>
  </header>
  <main class="board">
    <a class="board__btn" href="index.php">回留言板</a>
    <a class="board__btn" href="login.php">登入</a>
  <h1 class="board__title">註冊</h1>
  <?php
    if (!empty($_GET['errCode'])){
      $code = $_GET['errCode'];
      $msg = 'Error';
      if ($code === '1') {
        $msg = '資料不齊全';
      } else if ($code === '2') {
        $msg = '帳戶已被註冊';
      }
      echo '<h2 class="error"> 錯誤:'. $msg .'</h2>';
    }
  ?>
  <form class="board__submit__form" method="POST" action="handle_register.php" >
    <div class="board__nickname">
      <span>暱稱：</span>
      <input type="text" name="nickname">
    </div>
    <div class="board__nickname">
      <span>帳號：</span>
      <input type="text" name="username">
    </div>
    <div class="board__nickname">
      <span>密碼：</span>
      <input type="password" name="password">
    </div>
    <button class="board__submit_btn" type="submit" >送出</button>
  </form>
  </main>
</body>
</html>