<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>購入手続画面</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="./public/css/flame.css">
    <link rel="stylesheet" href="./public/css/contoroller.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./each/css/buy/purchase.css">
</head>
<body>
<div id="wrapper">
<br>
<br>
<br>
<br>
<div class="main">
  <br>
  <p class="font_b">購入手続</p>
  <br>
  <hr>
  <br>
<form action="index.php" method="GET" enctype="multipart/form-data">
<div class="section">
  <h2 class="sub">商品情報</h2>
  <img src="image/products/<?php echo $item['img'];?>">
  <ul>
    <li>商品名：<?php echo $item['name'];?></li>
    <li>商品価格：<?php echo $item['price'];?></li>
  </ul>
</div>
  <br>
  <hr>
  <br>
<div class="section">
  <h2 class="sub">ポイントの使用</h2>
    <p><input type="number" name="use_point" size="8" class="box" value="0" max="<?php echo $buyer['point'];?>"> P</p>
    <p>所持ポイント: <?php echo $buyer['point'];?>P</p>
  <br>
  <h2 class="sub">売上金の使用</h2>
    <p><input type="number" name="use_proceed" size="8" class="box" value="0" max="<?php echo $buyer['proceeds'];?>"> 円</p>
    <p>所持売上: <?php echo $buyer['proceeds'];?>円</p>
</div>
  <br>
  <hr>
  <br>
<div class="section">
  <h2 class="sub">支払方法</h2>
  <ul>
    <li><input type="radio" name="payment" value="credit_card" class="bt" checked="checked">クレジットカード決済</li>
    <li><input type="radio" name="payment" value="credit" class="bt">現金振込</li>
  </ul>
</div>
  <br>
  <hr>
  <br>
<div class ="section">
  <h2 class="sub">配送先</h2>
    <p><?php echo $buyer['user_name'];?><br>
    <?php echo $buyer['address'];?></p>
</div>
  <br>
<br>
<br>
<input type="hidden" name="item" value="<?php echo $_GET['buy'];?>">
<p><button type="submit" name="p_confirm" class="bt-design">購入確認</button></p>
<br>
</form>
<p><button type="submit" name="return" class="bt-design2" onclick="location.href='./index.php?product=<?php echo $_GET['buy'];?>'">キャンセル</button></p>
<br>
<br>
</div>

<div class="footer">
  <div class="content">
    <div class="copyright">
    <p>&copy; TRUSTme</p>
    </div>
  </div>
  </div>
  </div>
</body>
</html>
