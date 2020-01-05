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
キーワード検索して検索結果の商品idを配列で返す関数
引数：会員ID,入力キーワード(string)
戻り値：連想配列
*/
function search_products($member_id,$keyword){

	$list = [];
	$sql = "SELECT id FROM products WHERE product_name LIKE'%".$keyword."%' ORDER BY RIGHT(id,5) DESC;";

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");
	$result = mysqli_query($cn,$sql);

/*--------------検索履歴に保存----------*/
	$sql = "INSERT INTO search_history(member_id,keyword)VALUES('$member_id','$keyword');";
	mysqli_query($cn,$sql);

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