<?php
/*---------------------------------------
/* pg_name: extract_follow
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
会員IDからフォローされている会員を呼び出す関数
引数：会員ID
戻り値：連想配列
'id' => フォローされている会員のID

*/


function extract_follower($member_id){

	$list = [];

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "SELECT member_id FROM follow WHERE follow_member_id = '".$member_id."';";
	$result = mysqli_query($cn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$follow = [
			'id' => $row['member_id'],
		];
		$list[] = $follow;
	}

	mysqli_close($cn);
	return $list;

}

?>