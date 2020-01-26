<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>trustMe</title>
  <meta name="description" content="サイトキャプションを入力">
  <meta name="keywords" content="サイトキーワードを,で区切って入力">
  <link rel="stylesheet" href="public/css/flame.css">
  <link rel="stylesheet" href="public/css/contoroller.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <style type="text/css">
<?php if(isset($_SESSION['product_id']) == true && $_SESSION['buyer_id'] != ""){ ?>
      .tuchi{display: block;}
<?php }else { ?>
      .tuchi{display: none;}
<?php } ?>
    
    
  </style>
  
</head>
  <body>
      <div class="exhibit"><a href="index.php?exhibit=1"></a></div>
      <div id="header">
        <ul>
          <li><img src="image/site/logo_sq.png"><input type="text" placeholder="" class="Sinput"></li>
          <li><a href="index.php?id=1"><img src="image/icon/cavi.jpg"></a></li>
<!--          <li><a href="../index.php?">会員登録</a><a href="">ログイン</a></li>-->
        </ul>
      </div>
      <div id="controller">
        <ul>
          <li><a href="index.php"><img src="image/site/logo_sq.png"></a></li>
          <li><a href="index.php?favList=1"><img src="image/icon/favorite_border3.png"></a></li>
          <li><a href="index.php?notification=1"><img src="image/icon/notifications_none.png"></a></li>
          <li><a href="index.php?account=1"><img src="image/icon/account_circle.png"></a></li>
        </ul>
      </div>
    <div class="tuchi"></div>
  </body>
</html>