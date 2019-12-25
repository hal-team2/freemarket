<?php
/*---------------------------------------
/* pg_name: search_function
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/

/*---------主処理----------*/


/*
キーワード検索して検索結果の商品idを配列で返す関数
引数：$cn(DB接続),$keyword(str)
戻り値：連想配列
*/
function search_products($cn,$keyword){
	$list = [];
	/*ID降順にしてるけど出品日時順にしますか？(テーブルに出品日時がありません)*/
	$sql = "SELECT id FROM products WHERE product_name LIKE'%".$keyword."%' ORDER BY id DESC;";
	$result = mysqli_query($cn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$product = [
			'id' => $row['id']
		];
		$list[] = $product;
	}
	return $list;
}

/*
カテゴリ検索して検索結果の商品idを返す関数
引数：$category(int)
戻り値：連想配列
*/
function search_category($cn,$category){
	$list = [];
	$sql = "SELECT id FROM products WHERE category_id =".$category." ORDER BY id DESC;";
	$result = mysqli_query($cn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$product = [
			'id' => $row['id']
		];
		$list[] = $product;
	}
	return $list;
}


/*
カテゴリ検索して検索結果の商品idを返す関数
引数：$condition(int)
戻り値：連想配列
*/
function search_condition($cn,$condition){
	$list = [];
	$sql = "SELECT id FROM products WHERE product_condition =".$condition." ORDER BY id DESC;";
	$result = mysqli_query($cn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$product = [
			'id' => $row['id']
		];
		$list[] = $product;
	}
	return $list;
}


?>