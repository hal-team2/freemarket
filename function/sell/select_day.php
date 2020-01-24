<?php
/*---------------------------------------
/* pg_name: select_day
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

date_default_timezone_set('Asia/Tokyo');

/*---------主処理----------*/

/*
集荷日を配列に入れる関数

引数：商品ID
戻り値：配列

*/


function select_day($id){

	$day = [];

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "SELECT send_date FROM products WHERE id = '".$id."';";
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);

	while($row = mysqli_fetch_assoc($result)){

		if($row['send_date'] == '1～2日'){
			$max = 2;
		}elseif($row['send_date'] == '3～4日'){
			$max = 4;
		}elseif($row['send_date'] == '4～7日'){
			$max = 7;
		}

		for($i = 1; $i <= $max; $i++){
			$day[] = date("Y/m/d", mktime(0, 0, 0, date("m"), date("d") + $i, date("Y")));
		}
	}
	return $day;
}

?>