<?php
/*---------------------------------------
/* pg_name: contoroll
/*---------------------------------------
/* IH12A905-team2: name
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/

session_start();

//$_SESSION['testbuy'] = 2;
//$_SESSION['testex'] = 1;
//$_SESSION['testpro'] = "B20000009";


require 'function/exhibit/product_exhibit.php';//<=ここでDBの情報設定してるよ
require 'function/products/top_items.php';
require 'function/search/search_category.php';
require 'function/products/item_info.php';
require 'function/buy/buyer_info.php';
require 'function/buy/purchase_info.php';
require 'function/buy/purchase.php';
require 'function/sell/select_day.php';
require 'function/sell/save_collect_day.php';

//ログイン
if(isset($_GET['login_id']) == true){
  $_SESSION['account_id'] = $_GET['login_id'];
}


// $now_account_id = "111";
// $buy_account_id = "222";
// $test_product = "B20000009";
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
  product_exhibit($_FILES['pic'],$_POST['name'],$_POST['summary'],$_POST['category'],$_POST['condition'],$_POST['decide_date'],$_POST['price'],$_POST['priority'],$_SESSION['account_id']);
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
  $buyer = buyer_info($_SESSION['account_id']);
  $item = purchase_info($_GET['buy']);
  require 'template/buy/purchase.php';
  require 'template/flame.php';
  exit;
}

//購入確認ページ
if(isset($_GET['p_confirm']) == true){
  $buyer = buyer_info($_SESSION['account_id']);
  $item = purchase_info($_GET['item']);
  require 'template/buy/purchase_confirm.php';
  require 'template/flame.php';
  exit;
}

//購入処理
if(isset($_POST['purchase']) == true){
  purchase($_SESSION['account_id'],$_POST['p_item'],$_POST['proceed'],$_POST['point']);
}

//発送日時指定
if(isset($_GET['sell']) == true){
  $product = item_info($_SESSION['product_id']);
  $buyer = buyer_info($_SESSION['buyer_id']);
  $day = select_day($_SESSION['product_id']);
  require 'template/sell/sell.php';
  require 'template/flame.php';
  exit;
}

//発送日確認ページ
if(isset($_GET['sell_confirm']) == true){
  $product = item_info($_SESSION['product_id']);
  require 'template/sell/sell_confirm.php';
  require 'template/flame.php';
  exit;
}

//集荷日確定処理
if(isset($_POST['collect']) == true){
	save_collect_day($_SESSION['product_id'],$_POST['date'],$_POST['time']);
}

//入金処理
if(isset($_GET['deposit']) == true){
  $_SESSION['buyer_id'] = "";
}

//通知ページ
if(isset($_GET['notification']) == true){
  

  if(isset($_SESSION['product_id']) == false){
    require 'template/notification/notification0.php';
//    require 'template/evaluation/evaluation.php';
    require 'template/flame.php';
    exit;
  }
  else if($_SESSION['exhibitor_id'] == $_SESSION['account_id'] && $_SESSION['exhibitor_id'] != ""){
    //出品者
      
    $product = item_info($_SESSION['product_id']);
    $buyer = buyer_info($_SESSION['buyer_id']);
    require 'template/notification/notification1.php';
    require 'template/flame.php';
    exit;
  }
  else if($_SESSION['buyer_id'] == $_SESSION['account_id'] && $_SESSION['buyer_id'] != ""){
    //購入者
    
    $product = item_info($_SESSION['product_id']);
    require 'template/notification/notification2.php';
    require 'template/flame.php';
    exit;
  }
  else {
    require 'template/notification/notification0.php';
    require 'template/flame.php';
    exit;
  }
}

//会員ページ
if(isset($_GET['account']) == true){
  require 'template/member/member.php';
    require 'template/flame.php';
  exit;
}

//TOPページ
$top_list = top_items($_SESSION['account_id']);
require 'template/index.php';
require 'template/flame.php';
exit;
?>