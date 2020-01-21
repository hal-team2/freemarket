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
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="public/js/masonry.pkgd.min.js"></script>
  <script src="public/js/slick.min.js"></script>
  <script src="each/js/index.js"></script>
  <script src="each/js/search/search.js"></script>
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
        <div class="Scontents">
          <div class="sujest Scontent">
            <ul class="sujestIn_1">
              <li><img src="image/site/outdoor.jpg"></li>
              <li><img src="image/site/it.jpg"></li>
            </ul>
            <ul class="sujestIn_2">
              <li><img src="image/site/snowpeak.jpg"></li>
              <li><img src="image/site/danner.jpg"></li>
            </ul>
            <button>View More</button>
          </div>
          <div class="trend Scontent">
            <h2>TREND</h2>
            <ul>
              <li><span class="rank">1.TREND</span><span class="title">シューズ</span></li>
              <li><span class="rank">2.TREND</span><span class="title">shoes</span></li>
              <li><span class="rank">3.TREND</span><span class="title">zapatos</span></li>
              <li><span class="rank">4.TREND</span><span class="title">靴</span></li>
              <li><span class="rank">5.TREND</span><span class="title">신발</span></li>
              <li><span class="rank">6.TREND</span><span class="title">chaussures</span></li>
            </ul>
          </div>
          <div class="category Scontent"></div>
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
<!--        <div class="box img1"><a href="index.php?favList=1" class="Fbutton1">+</a><img src="image/products/F20000024.jpg"></div>-->
        <?php for($index = 0; $index < count($top_list); $index++){ ?>
        <div class="box img<?php echo $index ?>"><a href="index.php?favList=<?php echo $top_list[$index]['id'] ?>" class="Fbutton<?php echo $index ?>">+</a><img src="image/products/<?php echo $top_list[$index]['img'] ?>"></div>
        <?php } ?>
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