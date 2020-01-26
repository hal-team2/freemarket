<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>発送確認画面</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="public/css/flame.css">
    <link rel="stylesheet" href="public/css/contoroller.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="each/css/sell/sell.css">
</head>
<body>
<div id="header">
  <ul>
    <li><img src="image/site/logo_sq.png"><input type="text" placeholder="" class="Sinput"></li>
  </ul>
</div>
<br>
<br>
<br>
<br>
<div class="main">
<form action="index.php" method="POST" enctype="multipart/form-data">
  <br>
  <br>
  <div class="section">
    <h2 class="sub">集荷日</h2>
    <br>
    <p class="bold"><?php echo $_GET['date'];?></p>
    <p class="bold"><?php echo $_GET['time'];?></p>
  </div>
  <br>
  <br>
  <hr>
  <br>
  <div class="section">
    <h2 class="sub">商品情報</h2>
    <ul>
      <li><img src="image/products/<?php echo $product['img'] ?>"></li>
      <li>商品名：<?php echo $product['name'] ?></li>
      <li>商品価格：<?php echo $product['price'] ?></li>
    </ul>
  </div>
<!--   <hr>
  <br>
  <div class ="section">
    <h2 class="sub">購入者</h2>
      <p><img src="image/icon/"></p>
      <p>〇田〇郎</p>
  </div> -->
  <br>
  <br>
  <br>
  <input type="hidden" name="date" value="<?php echo $_GET['date'];?>">
  <input type="hidden" name="time" value="<?php echo $_GET['time'];?>">
  <p><button type="submit" name="collect" class="bt-design">確定</button></p>
</form>
  <br>
  <p><button type="submit" name="return" class="bt-design2" onclick="location.href='index.php?sell=1'">戻る</button></p>
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
<div id="controller">
  <ul>
    <li><a href="#"><img src="image/site/logo_sq.png"></a></li>
    <li><a href="#"><img src="image/icon/favorite-24px.svg"></a></li>
    <li><a href="#"><img src="image/icon/chat-24px.svg"></a></li>
    <li><a href="#"><img src="image/icon/account_circle-24px.svg"></a></li>
  </ul>
</div>
</body>
</html>