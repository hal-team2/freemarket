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
トップページの商品画像と商品idを取得する関数
引数：なし
戻り値：連想配列
'id'=>商品ID
'img_id'=>画像ID

*/


function top_items(){

	$list = [];

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "SELECT product_id,img_id FROM product_img ORDER BY RIGHT(product_id,5) DESC;";
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);

	while($row = mysqli_fetch_assoc($result)){
		$product = [
			'id' => $row['product_id'],
			'img' => $row['img_id']
		];
		$list[] = $product;
	}
	return $list;
}


?>