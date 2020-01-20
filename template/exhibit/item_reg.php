<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>商品登録画面</title>
	<meta name="description" content="サイトキャプションを入力">
	<meta name="keywords" content="サイトキーワードを,で区切って入力">
	<link rel="stylesheet" href="../../public/css/flame.css">
	<link rel="stylesheet" href="../../public/css/contoroller.css">
	<link rel="stylesheet" href="../../public/css/main.css">
	<link rel="stylesheet" href="../../each/css/exhibit/item_reg.css">
</head>
<body>
<div id="header">
  <ul>
    <li><img src="../../image/site/logo_sq.png"><input type="text" placeholder=""></li>
  </ul>
</div>
<div class="main">
  <br>
  <p class="font_b">商品登録</p>
  <br>
  <hr>
  <br>
  <form action="" method="POST" enctype="multipart/form-data">
  <p class="sub">商品画像<span class="required">必須</span></p>
  <p><input type="file" name="pic" multiple="multiple" accept="image/*"></p>
  <br>
  <br>
  <p class="sub">商品名<span class="required">必須</span></p>
  <p class="box"><input type="text" name="name" class="textbox" placeholder="商品名(最大40字)"></p>
  <br>
  <p class="sub">商品説明<span class="required">必須</span></p>
  <p class="box"><textarea name="summary" placeholder="商品説明(最大1000字)"></textarea></p>
  <br>
  <p class="sub">商品状態<span class="required">必須</span></p>
  <p class="box">
    <input type="checkbox" name="condition" value="0">新品未使用
    <input type="checkbox" name="condition" value="1">未使用に近い
    <input type="checkbox" name="condition" value="2">目立った傷や汚れなし
    <input type="checkbox" name="condition" value="3">傷あり
    <input type="checkbox" name="condition" value="4">汚れあり
    <input type="checkbox" name="condition" value="5">日焼けあり
    <input type="checkbox" name="condition" value="6">欠品
    <input type="checkbox" name="condition" value="7">破損品
    <input type="checkbox" name="condition" value="8">箱なし
  </p>
  <br>
  <p class="sub">カテゴリ<span class="required">必須</span></p>
  <p class="box">
    <select name="category">
    <option value="">カテゴリを選択</option>
    <option value="F">ファッション・アクセサリ－</option>
    <option value="D">日用品・文具</option>
    <option value="S">スポーツ用品</option>
    <option value="B">ベビー用品</option>
    <option value="I">インテリア・キッチン・ダイニング</option>
    <option value="M">家電・オーディオ・モバイルグッズ</option>
    <option value="C">コスメ・スキンケア</option>
    <option value="P">書籍</option>
    </select>
  </p>
  <br>
  <p class="sub">発送日の目安<span class="required">必須</span></p>
  <p class="box">
    <select name="decide_date">
    <option value="">発送までの日数を選択</option>
    <option value="0">１～２日</option>
    <option value="1">２～３日</option>
    <option value="2">４～７日</option>
    </select>
  </p>
  <br>
  <p class="pricebox">￥<input type ="text" name="price" placeholder="価格入力"></p>
  <p class="sub">販売価格<span class="required">必須</span></p>
<br>
  <p class="sub">商品優先登録</p>
  <p class="box">
  <p><input type="radio" name="priority" value="1">登録する</p>
  <p><input type="radio" name="priority" value="0" checked>登録しない</p>  
<br>
<br>
<p><button type="submit" name="regist" class="bt-design">出品する</button></p>
</form>
<br>
<p><button type="submit" name="top" class="bt-design2" onclick="location.href='../index.php'">TOPへ戻る</button></p>
<br>
<br>
</div>
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
    <li><a href="#"><img src="../../image/site/logo_sq.png"></a></li>
    <li><a href="#"><img src="../../image/icon/favorite-24px.svg"></a></li>
    <li><a href="#"><img src="../../image/icon/chat-24px.svg"></a></li>
    <li><a href="#"><img src="../../image/icon/account_circle-24px.svg"></a></li>
  </ul>
</div>
</body>
</html>
