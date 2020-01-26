<?php

//わたしのデバック用　消してもいいよ
// require_once '../../function/exhibit/product_exhibit.php';

// if(isset($_POST['regist'])){
//   product_exhibit($_FILES['pic'],$_POST['name'],$_POST['summary'],$_POST['category'],$_POST['condition'],$_POST['decide_date'],$_POST['price'],$_POST['priority'],'SAMPLE');
// }



//TODO
//チェックボックスcssまだです
//カテゴリをもう一段階つくる

?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>商品登録画面</title>
	<meta name="description" content="サイトキャプションを入力">
	<meta name="keywords" content="サイトキーワードを,で区切って入力">
	<link rel="stylesheet" href="public/css/flame.css">
	<link rel="stylesheet" href="public/css/contoroller.css">
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="each/css/exhibit/item_reg.css">
</head>
<body>
<div id="wrapper">
<div class="main">
  <br>
  <p class="font_b">商品登録</p>
  <br>
  <hr>
  <br>
  <form action="index.php" method="POST" enctype="multipart/form-data">
  <p class="sub">商品画像<span class="required">必須</span></p>
  <p><input type="file" name="pic" multiple="multiple" accept="image/*"></p>
  <br>
  <br>
  <p class="sub">商品名<span class="required">必須</span></p>
  <p class="box"><input type="text" name="name" class="textbox" placeholder="商品名(最大40字)"></p>
<!--   <br>
  <p class="sub">商品説明</p>
  <p class="box">
    <input type="hidden" name="summary[]" value="">
    <input type="checkbox" name="summary[]" value="正規品">正規品
    <input type="checkbox" name="summary[]" value="限定品">限定品
    <input type="checkbox" name="summary[]" value="保証書付き">保証書付き
    <input type="checkbox" name="summary[]" value="値引き可">値引き可
    <input type="checkbox" name="summary[]" value="即購入可">即購入可
    <input type="checkbox" name="summary[]" value="Sサイズ">Sサイズ
    <input type="checkbox" name="summary[]" value="Mサイズ">Mサイズ
    <input type="checkbox" name="summary[]" value="Lサイズ">Lサイズ
    <input type="checkbox" name="summary[]" value="フリーサイズ">フリーサイズ
  </p> -->
  <br>
  <p class="sub">商品状態<span class="required">必須</span></p>
  <p class="box_c">
    <input type="hidden" name="condition[]" value="">
    <input type="checkbox" name="condition[]" value="新品未使用">新品未使用　　　　　　
    <input type="checkbox" name="condition[]" value="未使用に近い">未使用に近い　　　　
    <br>
    <input type="checkbox" name="condition[]" value="目立った傷や汚れなし">目立った傷や汚れなし　
    <input type="checkbox" name="condition[]" value="傷あり">傷あり　　　　　　　
    <br>
    <input type="checkbox" name="condition[]" value="汚れあり">汚れあり　　　　　　　
    <input type="checkbox" name="condition[]" value="日焼けあり">日焼けあり　　　　　
    <br>
    <input type="checkbox" name="condition[]" value="欠品">欠品　　　　　　　　　
    <input type="checkbox" name="condition[]" value="破損品">破損品　　　　　　　
    <br>
    <input type="checkbox" name="condition[]" value="箱なし" class="left">箱なし　　　　　　　　
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
    <option value="2">１～２日</option>
    <option value="4">３～４日</option>
    <option value="7">４～７日</option>
    </select>
  </p>
  <br>
  <p class="pricebox">￥<input type ="text" name="price" placeholder="価格入力"></p>
  <p class="sub">販売価格<span class="required">必須</span></p>
<br>
  <p class="sub">商品優先登録</p>
  <p class="box_p">
  <input type="radio" name="priority" value="1">登録する　
  <input type="radio" name="priority" value="0" checked>登録しない
  </p> 
<br>
<br>
<p><button type="submit" name="regist" class="bt-design">出品する</button></p>
</form>
<br>
<p><button type="submit" name="top" class="bt-design2" onclick="location.href='index.php'">TOPへ戻る</button></p>
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
