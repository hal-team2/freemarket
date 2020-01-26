<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="サイトキャプションを入力">
  <meta name="keywords" content="サイトキーワードを,で区切って入力">
  <link rel="stylesheet" href="public/css/flame.css">
  <link rel="stylesheet" href="public/css/contoroller.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="each/css/notification/notification.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="public/js/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="public/js/masonry.pkgd.min.js"></script>
  <script src="slick/slick.min.js"></script>
</head>
  <body>
    <div id="wrapper">
      <id id="notification">
        <ul>
          <li><span class="product">「<?php echo $product['name'] ?>」</span>が <sapn class="buyer"><?php echo $buyer['user_name'] ?></sapn> さんによって購入されました。発送日時を指定してください。</li>
          <li class="sell"><a href="index.php?sell=1">発送日時を指定する</a></li>
        </ul>
      </id>
    </div>
  </body>
</html>