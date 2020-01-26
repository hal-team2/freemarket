<?php
/*---------------------------------------
/* pg_name: search_exhibit
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
会員IDから出品物を抽出して、商品IDと商品画像を返す関数

引数：会員ID
戻り値：連想配列

'id' => 商品ID
'img' => 商品画像

*/
function search_exhibit($member_id){

	$list = [];
	$sql = "SELECT id,img_id FROM products INNER JOIN product_img ON products.id = product_img.product_id WHERE sell = 0 AND exhibitor_id = '".$member_id."'ORDER BY RIGHT(product_id,5) DESC;";

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);

	while($row = mysqli_fetch_assoc($result)){
		$product = [
			'id' => $row['id'],
			'img' => $row['img_id']
		];
		$list[] = $product;
	}
	return $list;
}

?>