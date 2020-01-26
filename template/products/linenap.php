<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="サイトキャプションを入力">
  <meta name="keywords" content="サイトキーワードを,で区切って入力">
  <link rel="stylesheet" href="public/css/flame.css">
  <link rel="stylesheet" href="public/css/contoroller.css">
  <link rel="stylesheet" href="each/css/products/linenap.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="public/js/jquery-3.4.1.min.js"></script>
</head>
  <body>
    <div id="wrapper">
        <p class="Pimg"><img src="image/products/<?php echo $product_detail['img']; ?>"></p>
      <div id="linenap">
        <ul class="title">
          <li><?php  echo $product_detail['name'] ?></li>
        </ul>
        <div class="details">
          <ul class="detail">
            <li>¥<span><?php echo $product_detail['price']; ?></span></li>
            <li>< カテゴリ ></li>
            <li><?php echo $product_detail['category']; ?></li>
            <li>< 発送日の目安 ></li>
            <li><?php echo $product_detail['send_date']; ?></li>
          </ul>
          <ul class="condition">
<?php for($cnt = 0; $cnt < count($product_detail['codition']); $cnt++){ ?>
            <li><?php echo $product_detail['codition'][$cnt]; ?></li>
<?php } ?>
          </ul>
        </div>
        <div class="account">
          <ul>
            <li><img src="image/icon/account_circle.png"></li>
            <li>name</li>
          </ul>
        </div>
      </div>
        <p class="buyButton"><a href="index.php?buy=<?php echo $product_detail['id'] ?>">購入する</a></p>
      <p class="backButton"><a href="index.php"><img src="image/icon/backspace.png"></a></p>
      
    </div>
  </body>
</html>