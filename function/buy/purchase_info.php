<?php
/*---------------------------------------
/* pg_name: buyer_info
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/


// //暫定で定数化
// const HOST = 'localhost';
// const DB_NAME = 'trustme';
// const DB_USER = 'root';
// const DB_PASS = '';


/*---------主処理----------*/

/*
商品の購入手続き画面に商品情報を送る関数

引数：商品ID(str)
戻り値：連想配列
'img' => 商品画像
'name' => 商品名
'price' => 商品価格
*/


function purchase_info($product_id){

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");


/**---------商品情報呼び出し-----------**/
	$sql = "SELECT product_name,img_id,price FROM (products INNER JOIN product_img ON products.id = product_img.product_id) INNER JOIN product_price ON products.id = product_price.product_id WHERE id ='".$product_id."';";
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);


	while($row = mysqli_fetch_assoc($result)){

	$product = [
		'img' => $row['img_id'],
		'name' => $row['product_name'],
		'price' => $row['price']
	];
	}
	return $product;

}


?>