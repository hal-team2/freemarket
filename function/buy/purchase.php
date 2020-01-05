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
// const DB_NAME = 'sd';
// const DB_USER = 'root';
// const DB_PASS = '';



/*---------主処理----------*/

/*
商品が購入された際にmember_trade_historyにレコード作成する関数

引数：会員ID(str),商品ID(str)
戻り値：なし
*/


function purchase($member_id,$product_id){

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");


/**---------商品価格呼び出し-----------**/
	$sql = "SELECT price FROM product_price WHERE product_id ='".$product_id."';";
	$result = mysqli_query($cn,$sql);
	$row = mysqli_fetch_assoc($result);

	/*------------データベース書き込み---------------------*/
	$sql = "INSERT INTO member_trade_history(member_id,product_id,price) VALUES('".$member_id."','".$product_id."',".$row['price'].");";
	mysqli_query($cn,$sql);

	mysqli_close($cn);

}

?>