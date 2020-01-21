<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="サイトキャプションを入力">
  <meta name="keywords" content="サイトキーワードを,で区切って入力">
  <link rel="stylesheet" href="public/css/flame.css">
  <link rel="stylesheet" href="public/css/contoroller.css">
  <link rel="stylesheet" href="public/css/slick.css">
  <link rel="stylesheet" href="public/css/slick-theme.css">
  <link rel="stylesheet" href="each/css/index.css">
  <link rel="stylesheet" href="each/css/search/search.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="public/js/jquery-3.4.1.min.js"></script>
  <script src="public/js/masonry.pkgd.min.js"></script>
  <script src="public/js/slick.min.js"></script>
  <script src="each/js/index.js"></script>
</head>
  <body>
    <div id="wrapper">
      <div class="exhibit"><a href="index.php?exhibit=1">+</a></div>
      <div id="header">
        <ul>
          <li><img src="image/site/logo_sq.png"><input type="text" placeholder="" class="Sinput"></li>
          <li><a href="index.php?id=1"><img src="image/icon/cavi.jpg"></a></li>
<!--          <li><a href="../index.php?">会員登録</a><a href="">ログイン</a></li>-->
        </ul>
      </div>
      <div id="search">
<!--
        <div id="popular">
          <h2>TREND<img src="image/icon/trending_up-24px.svg"></h2>
          <ul>
            <li>うんこ</li>
            <li>ポケモン剣盾</li>
            <li>Mk</li>
            <li>徹夜</li>
          </ul>
        </div>
        <div id="category">
          <h2>CATEGORY<img src="image/icon/category-24px.svg"></h2>
          <div class="categoryBox">
            <div class="Sbox">
              <ul>
                <li><img src="image/icon/shoes.png"></li>
                <li>SHOSE</li>
              </ul>
            </div>
            <div class="Sbox">
              <ul>
                <li><img src="image/icon/toy.png"></li>
                <li>TOY</li>
              </ul>
            </div>
            <div class="Sbox">
              <ul>
                <li><img src="image/icon/wearing.png"></li>
                <li>WEAR</li>
              </ul>
            </div>
            <div class="Sbox">
              <ul>
                <li><img src="image/icon/book.png"></li>
                <li>BOOK</li>
              </ul>
            </div>
          </div>
        </div>
-->
        <ul>
          <li>あすすめ<img src="image/icon/category-24px.svg"></li>
          <li>トレンド<img src="image/icon/category-24px.svg"></li>
          <li>カテゴリー<img src="image/icon/category-24px.svg"></li>
        </ul>
        <div class="Scontents">
          <div class="sujest"></div>
          <div class="trend"></div>
          <div class="category"></div>
        </div>
      </div>
      <div id="banner">
        <ul class="Bimg">
          <li><img src="image/site/outdoor.jpg"></li>
          <li><img src="image/site/it.jpg"></li>
        </ul>
      </div>
      <div id="favoriteName">
        <ul>
          <li><</li>
          <li>shose</li>
          <li>book</li>
          <li>cooking</li>
          <li>toy</li>
          <li>></li>
        </ul>
      </div>
      <div id="contents">
        <div class="box img1"><a href="index.php?favList=1" class="Fbutton1">+</a><img src="image/products/sample1.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample2.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample3.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample4.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample5.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample6.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample7.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample8.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample9.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample10.jpg"></div>
        <div class="box img"><a href="" class="Fbutton">+</a><img src="image/products/sample11.jpg"></div>
      </div>
      <div id="controller">
        <ul>
          <li><a href=""><img src="image/site/logo_sq.png"></a></li>
          <li><a href="index.php?favList=1"><img src="image/icon/favorite-24px.svg"></a></li>
          <li><a href=""><img src="image/icon/chat-24px.svg"></a></li>
          <li><a href=""><img src="image/icon/account_circle-24px.svg"></a></li>
        </ul>
      </div>
    </div>
  </body>
</html>