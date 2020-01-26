<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="サイトキャプションを入力">
  <meta name="keywords" content="サイトキーワードを,で区切って入力">
  <link rel="stylesheet" href="public/css/flame.css">
  <link rel="stylesheet" href="public/css/contoroller.css">
  <link rel="stylesheet" href="each/css/evaluation/evaluation.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
<script src="public/js/jquery-3.4.1.min.js"></script>
  <script src="each/js/search/search.js"></script>
</head>
  <body>
    <div id="wrapper">
      <div id="evaluation">
        <ul>
          <li>取引が完了しました。<?php ?>さんを評価してください。</li>
          <li class="eva"><button>評価する</button></li>
        </ul>
      </div>
      <div id="evaForm">
        <form action="index.php" method="get" enctype="multipart/form-data">
          <ul>
            <li>
              <select name="evalucation">
                <option value="">星の数</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </li>
            <li><input type="submit" name="evaButton"></li>
          </ul>
        </form>
      </div>
    </div>
  </body>
</html>