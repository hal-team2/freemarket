<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>購入手続画面</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="public/css/flame.css">
    <link rel="stylesheet" href="public/css/contoroller.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="each/css/buy/purchase.css">
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
  <br>
  <p class="font_b">購入手続</p>
  <br>
  <hr>
  <br>
  <form action="index.php" method="POST" enctype="multipart/form-data">
<div class="section">
  <h2 class="sub">商品情報</h2>
  <img src="image/products/F20000001.jpg">
  <ul>
    <li>商品名：帽子</li>
    <li>商品価格：30000</li>
  </ul>
</div>
  <br>
  <hr>
  <br>
<div class="section">
  <h2 class="sub">ポイントの使用</h2>
    <p><input type="text" name="use_point" size="8" class="box"> P</p>
    <p>所持ポイント:0000P</p>
  <br>
  <h2 class="sub">売上金の使用</h2>
    <p><input type="text" name="use_proceed" size="8" class="box"> 円</p>
    <p>所持売上:0000円</p>
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
    <p>〇田〇郎<br>
    〒000-0000<br>
    〇〇県〇〇〇市〇〇〇〇〇〇〇〇</p>
</div>
  <br>
<br>
<br>
<p><button type="submit" name="purchase" class="bt-design">購入確認</button></p>
<br>
<p><button type="submit" name="top" class="bt-design2" onclick="location.href=''">キャンセル</button></p>
<br>
<br>
</form>
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
