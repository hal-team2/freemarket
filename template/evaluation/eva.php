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
    <p><?php echo $exhibitor['user_name'];?>さんを評価してください。</p>
  </div>
  <br>
  <hr>
  <br>
  <div class="section">
    <h2>評価選択</h2>
    <br>
    <select name="eva_select">
      <option value="5">☆5</option>
      <option value="4">☆4</option>
      <option value="3">☆3</option>
      <option value="2">☆2</option>
      <option value="1">☆1</option>
    </select>
  </div>
  <br>
  <hr>
  <br>
  <br>
  <ul class="button">
    <li><button type="submit" name="trade_over" class="bt-design">完了</button></li>
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