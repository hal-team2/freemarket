<?php
/*---------------------------------------
/* pg_name: search_function
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
カテゴリ検索して検索結果の商品idを返す関数
引数：カテゴリー名(string)
戻り値：連想配列
*/
function search_category($category){
	$list = [];
	$sql = "SELECT id FROM products WHERE category_id ='".$category."' ORDER BY RIGHT(id,5) DESC;";

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);

	while($row = mysqli_fetch_assoc($result)){
		$product = [
			'id' => $row['id']
		];
		$list[] = $product;
	}
	return $list;
}


?>