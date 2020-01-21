<?php
/*---------------------------------------
/* pg_name: contoroll
/*---------------------------------------
/* IH12A905-team2: name
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/

require 'function/exhibit/product_exhibit.php';
require 'function/products/top_items.php';

$account_id = 1;
/*---------主処理----------*/


//会員情報ページ
if(isset($_GET['id']) == true){
  require 'template/member/member.php';
  exit;
}

//topページ
if(isset($_GET['back']) == true){
  require 'template/index.php';
  exit;
}

//fav_listページ
if(isset($_GET['favList']) == true){
  require 'template/search/fav_list.php';
  exit;
}

//出品ページ
if(isset($_GET['exhibit']) == true){
//  $account_id = $_GET['exhibit'];
  require 'template/exhibit/item_reg.php';
  exit;
}

if(isset($_POST['regist'])){
  product_exhibit($_FILES['pic'],$_POST['name'],$_POST['summary'],$_POST['category'],$_POST['condition'],$_POST['decide_date'],$_POST['price'],$_POST['priority'],$account_id);
}

$top_list = top_items();

//var_dump($top_list);

require 'template/index.php';
exit;
?>