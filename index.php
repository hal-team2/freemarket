<?php
/*---------------------------------------
/* pg_name: contoroll
/*---------------------------------------
/* IH12A905-team2: name
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/


require 'function/exhibit/product_exhibit.php';//<=ここでDBの情報設定してるよ
require 'function/products/top_items.php';
require 'function/search/search_category.php';
require 'function/products/item_info.php';

$account_id = 2;
/*---------主処理----------*/


//会員情報ページ
if(isset($_GET['id']) == true){
  require 'template/member/member.php';
  require 'template/flame.php';
  exit;
}

//fav_listページ
if(isset($_GET['favList']) == true){
  require 'template/search/fav_list.php';
  require 'template/flame.php';
  exit;
}

//出品ページ
if(isset($_GET['exhibit']) == true){
//  $account_id = $_GET['exhibit'];
  require 'template/exhibit/item_reg.php';
  require 'template/flame.php';
  exit;
}

//商品出品
if(isset($_POST['regist'])){
  product_exhibit($_FILES['pic'],$_POST['name'],$_POST['summary'],$_POST['category'],$_POST['condition'],$_POST['decide_date'],$_POST['price'],$_POST['priority'],$account_id);
}

//カテゴリー検索
if(isset($_GET['category']) == true){
  $top_list = search_category($_GET['category']);
  require 'template/index.php';
  require 'template/flame.php';
  exit;
}

//商品詳細ページ
if(isset($_GET['product']) == true){
  $product_detail = item_info($_GET['product']);
  require 'template/products/linenap.php';
  require 'template/flame.php';
  exit;
}

//購入ページ
if(isset($_GET['buy']) == true){
  require 'template/buy/purchase.php';
  require 'template/flame.php';
  exit;
}

//TOPページ
$top_list = top_items($account_id);
require 'template/index.php';
require 'template/flame.php';
exit;
?>