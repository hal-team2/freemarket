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
  <br>
  <br>
  <div class="section">
    <h2 class="sub">集荷日</h2>
    <br>
    <p class="bold">2019/01/28</p>
    <p class="bold">14:00～16:00</p>
  </div>
  <br>
  <br>
  <hr>
  <br>
  <form action="index.php" method="POST" enctype="multipart/form-data">
  <div class="section">
    <h2 class="sub">商品情報</h2>
    <img src="sample.jpg">
    <ul>
      <li>商品名：帽子</li>
      <li>商品価格：30000</li>
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
  <p><button type="submit" name="collect" class="bt-design">確定</button></p>
  <br>
  <p><button type="submit" name="return" class="bt-design2" onclick="location.href=''">戻る</button></p>
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