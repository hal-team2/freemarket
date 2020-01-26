<?php
/*---------------------------------------
/* pg_name: trade_over
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
取引完了時に
・member_trade_historyに完了日時の書き込み
・member_proceedsに売上金の追加
を行う関数

引数：会員ID(str),商品ID(str)
戻り値：なし
*/


//日付設定
date_default_timezone_set('Asia/Tokyo');

function trade_over($member_id,$product_id){

	$date = date('Y-m-d');

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");


/**---------商品価格呼び出し-----------**/
	$sql = "SELECT price FROM product_price WHERE product_id ='".$product_id."';";
	$result = mysqli_query($cn,$sql);
	$row = mysqli_fetch_assoc($result);

/*------------データベース書き込み---------------------*/
	$sql = "INSERT INTO member_trade_history(member_id,product_id,price,trade_over_date) VALUES('".$member_id."','".$product_id."',".$row['price'].",'".$date."');";
	mysqli_query($cn,$sql);


	$sql = "SELECT COUNT(*) FROM member_proceeds WHERE member_id = '".$member_id."';";
	$result = mysqli_query($cn,$sql);
	$cnt = mysqli_fetch_assoc($result);

/*------------売上が作成されていなければレコード作成----------*/
	if($cnt['COUNT(*)'] == 0){
		$sql = "INSERT INTO member_proceeds(member_id,proceeds,hold_points) VALUES('".$member_id."',0,0);";
		mysqli_query($cn,$sql);
	}

/*------------商品価格呼び出し-------------------------------------*/
	$sql = "SELECT price FROM member_trade_history WHERE member_id ='".$member_id."' AND product_id ='".$product_id."';";
	$result = mysqli_query($cn,$sql);
	$row = mysqli_fetch_assoc($result);

/*------------売上金更新----------------------*/
	$sql = "UPDATE member_proceeds SET proceeds = proceeds +".$row["price"]." WHERE member_id ='".$member_id."';";
	mysqli_query($cn,$sql);

	mysqli_close($cn);

}


?>