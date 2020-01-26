<?php
/*---------------------------------------
/* pg_name: purchase
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

＜購入確定したときに発動するやつ＞

・商品が購入された際にdecide_send_dateにレコード作成する
・productsのsellカラムを1に変更する
・商品id,購入者id,出品者idsession付与

引数：会員ID(str),商品ID(str)
戻り値：なし
*/


function purchase($member_id,$product_id){

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

/*------------データベース書き込み---------------------*/
	$sql = "INSERT INTO decide_send_date(product_id,buyer_id) VALUES('".$product_id."','".$member_id."');";
	mysqli_query($cn,$sql);

/*-----------データベース更新-------------------------------*/
    $sql = "UPDATE products SET sell = 1 WHERE id ='".$product_id."';";
    mysqli_query($cn,$sql);

/********session用に取得**********/
    $sql = "SELECT exhibitor_id FROM products WHERE id = '".$product_id."';";
	$result = mysqli_query($cn,$sql);
	$row = mysqli_fetch_assoc($result);

	mysqli_close($cn);

	session_start();
	$_SESSION['product_id'] = $product_id;
	$_SESSION['buyer_id'] = $member_id;
	$_SESSION['exhibitor_id'] = $row['exhibitor_id'];

}

?>