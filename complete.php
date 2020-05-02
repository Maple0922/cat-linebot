<?php session_start(); ?>
<?php
if($_SESSION['message'] == null){
  header("Location: ./index.php");
}
 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ミュウ LINE Bot</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="icon/favicon.svg">
  <link rel="apple-touch-icon" href="icon/favicon.svg">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <header class="header">
    <h1 class="header__title">LINE Bot ミュウ</h1>
  </header>
  <main class="main">
    <div class="main__container">
      <p class="main__message"><?php echo $_SESSION['message'] ?></p>
      <p class="main__text">送信しました。</p>
      <input class="main__button return" type="button" name="button" onclick="location.href='./index.php'" value="戻る">
    </div>
  </main>
  <?php unset($_SESSION['message']); ?>
</body>
</html>
