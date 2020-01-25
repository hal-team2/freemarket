<?php
/*---------------------------------------
/* pg_name: buyer_info
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
商品の購入手続き画面に会員情報を送る関数

引数：会員ID(str)
戻り値：連想配列
'proceeds' => 所持売上
'point' => 所持ポイント
'user_name' => 購入者名
'address' => 配送先住所
*/


function buyer_info($member_id){

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");


/*------------売上が作成されていなければレコード作成----------*/
	$sql = "SELECT COUNT(*) FROM member_proceeds WHERE member_id = '".$member_id."';";
	$result = mysqli_query($cn,$sql);
	$cnt = mysqli_fetch_assoc($result);

	if($cnt['COUNT(*)'] == 0){
		$sql = "INSERT INTO member_proceeds(member_id,proceeds,hold_points) VALUES('".$member_id."',0,0);";
		mysqli_query($cn,$sql);
	}


/**---------会員情報呼び出し-----------**/
	$sql = "SELECT proceeds,hold_points,user_name,address FROM member INNER JOIN member_proceeds ON member.id = member_proceeds.member_id WHERE member_id ='".$member_id."';";
	$result = mysqli_query($cn,$sql);
	mysqli_close($cn);


	while($row = mysqli_fetch_assoc($result)){

	$member = [
		'proceeds' => $row['proceeds'],
		'point' => $row['hold_points'],
		'user_name' => $row['user_name'],
		'address' => $row['address']
	];
	}
	return $member;

}

?>