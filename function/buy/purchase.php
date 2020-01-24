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

＜購入ボタンが押されたときに発動するやつ＞

商品が購入された際にdecide_send_dateにレコード作成する関数
productsのsellカラムを1に変更する関数

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

	mysqli_close($cn);

}

?>