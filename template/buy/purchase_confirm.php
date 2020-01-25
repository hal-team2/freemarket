<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>購入確認画面</title>
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
    <li><img src="../../image/site/logo_sq.png"><input type="text" placeholder="" class="Sinput"></li>
  </ul>
</div>
<br>
<br>
<br>
<br>
<div class="main">
  <br>
  <p class="font_b">購入確認</p>
  <br>
  <hr>
  <br>
<form action="index.php" method="POST" enctype="multipart/form-data">
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
  <h2 class="sub">使用ポイント</h2>
    <p><?php echo $_GET['use_point'];?>P</p>
  <h2 class="sub">売上金の使用</h2>
    <p><?php echo $_GET['use_proceed'];?>円</p>
</div>
  <br>
  <hr>
  <br>
<div class="section">
  <h2 class="sub">支払方法</h2>
    <p>
      <?php if($_GET['payment'] == 'credit_card'){
        echo 'クレジットカード';
      }else{
        echo '現金振込';
      }
      ?>
    </p>
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
<input type="hidden" name="p_item" value="<?php echo $_GET['item'];?>">
<input type="hidden" name="proceed" value="<?php echo $_GET['use_proceed'];?>">
<input type="hidden" name="point" value="<?php echo $_GET['use_point'];?>">
<p><button type="submit" name="purchase" class="bt-design">購入する</button></p>
<br>
</form>
<p><button type="submit" name="return" class="bt-design2" onclick="location.href='./index.php?buy=<?php echo $_GET['item'];?>'">戻る</button></p>
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
