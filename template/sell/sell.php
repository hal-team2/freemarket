<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>発送手続画面</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="public/css/flame.css">
    <link rel="stylesheet" href="public/css/contoroller.css">
    <link rel="stylesheet" href="publiccss/main.css">
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
  <div class="section">
    <p>商品が購入されました。<br>集荷日を指定してください。</p>
  </div>
  <br>
  <hr>
  <br>
  <div class="section">
    <h2>集荷日選択</h2>
    <br>
    <select name="date">
    <option value="">日付を選択</option>
    <option value="2020/01/28">2020/01/28</option>
    <option value="2020/01/29">2020/01/29</option>
    <option value="2020/01/30">2020/01/30</option>
    </select>
  </div>
  <br>
  <div class="section">
    <h2>時間帯</h2>
    <ul>
      <li><input type="radio" name="time" value="午前中" class="bt" checked="checked">午前中</li>
      <li><input type="radio" name="time" value="14時から16時" class="bt">14時から16時</li>
      <li><input type="radio" name="time" value="16時から18時" class="bt">16時から18時</li>
      <li><input type="radio" name="time" value="18時から20時" class="bt">18時から20時</li>
    </ul>
  </div>
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
  <br>
  <hr>
  <br>
  <div class ="section">
    <h2 class="sub">購入者</h2>
<!--       <p><img src="image/icon/"></p> -->
      <p>〇田〇郎</p>
  </div>
  <br>
  <br>
  <br>
  <p><button type="submit" name="purchase" class="bt-design">確認</button></p>
  <br>
  <p><button type="submit" name="top" class="bt-design2" onclick="location.href=''">TOPへ</button></p>
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