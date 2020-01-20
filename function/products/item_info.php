<?php
/*---------------------------------------
/* pg_name: top_items
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/


// //暫定で定数化
// const HOST = 'localhost';
// const DB_NAME = 'sd';
// const DB_USER = 'root';
// const DB_PASS = '';

/*---------主処理----------*/

/*
DBから商品ID、商品名、概要、カテゴリ、商品状態、出品者ID、商品画像を引っ張ってくる関数

引数：商品ID
戻り値：連想配列

'id' => 商品ID
'name' => 商品名
'summary' => 商品概要
'category' => カテゴリ
'codition' => 商品状態
'exhibitor_id' => 出品者ID
'img' => 商品画像

*/


function item_info($id){

	$product = [];

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "SELECT id,product_name,summary,category_id,product_condition,exhibitor_id,img_id FROM products INNER JOIN product_img ON products.id = product_img.product_id WHERE id = '".$id."'ORDER BY RIGHT(product_id,5) DESC;";
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);

	while($row = mysqli_fetch_assoc($result)){

	//カテゴリ
	if($row['category_id'] == 'F'){
		$categoty = "ファッション・アクセサリ－";
	}elseif($row['category_id'] == 'D'){
		$category = "日用品・文具";
	}elseif($row['category_id'] == 'S'){
		$category = "スポーツ用品";
	}elseif($row['category_id'] == 'B'){
		$category = "ベビー用品";
	}elseif($row['category_id'] == 'I'){
		$category = "インテリア・キッチン・ダイニング";
	}elseif($row['category_id'] == 'M'){
		$category = "家電・オーディオ・モバイルグッズ";
	}elseif($row['category_id'] == 'C'){
		$category = "コスメ・スキンケア";
	}elseif($row['category_id'] == 'P'){
		$category = "書籍";
	}

	//商品状態
	$condition = explode(",",$row['product_condition']);

	$product = [
		'id' => $row['id'],
		'name' => $row['product_name'],
		'summary' => $row['summary'],
		'category' => $category,
		'codition' => $condition,
		'exhibitor_id' => $row['exhibitor_id'],
		'img' => $row['img_id']
	];
	}
	return $product;
}

?>