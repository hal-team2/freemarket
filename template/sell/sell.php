<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>発送手続画面</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="public/css/flame.css">
    <link rel="stylesheet" href="public/css/contoroller.css">
    <link rel="stylesheet" href="each/css/sell/sell.css">
</head>
<body>
<div id="wrapper">
<div class="main">
<form action="index.php" method="GET" enctype="multipart/form-data">
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
    <?php foreach($day as $value){ ?>
      <option value="<?php echo $value;?>"><?php echo $value;?></option>
    <?php }?>
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
  <div class="section">
    <h2 class="sub">商品情報</h2>
    <ul>
      <li><img src="image/products/<?php echo $product['img'] ?>"></li>
      <li>商品名：<?php echo $product['name'] ?></li>
      <li>商品価格：<?php echo $product['price'] ?></li>
    </ul>
  </div>
  <br>
  <hr>
  <br>
  <div class ="section">
    <h2 class="sub">購入者</h2>
<!--       <p><img src="image/icon/"></p> -->
      <p class="name"><?php echo $buyer['user_name'] ?></p>
  </div>
  <br>
  <br>
  <br>
  <ul class="button">
    <li><button type="submit" name="sell_confirm" class="bt-design">確認</button></li>
</form>
    <li><button type="submit" name="top" class="bt-design2" onclick="location.href='index.php'">TOPへ</button></li>
  </ul>
  <br>
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