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
      <form class="main__form" action="post.php" method="post">
        <p class="main__text">送信するメッセージ</p>
        <input class="main__input" type="text" name="message" value="" required>
        <input class="main__button post" type="submit" name="button" value="送信">
      </form>
    </div>
  </main>
</body>
</html>
