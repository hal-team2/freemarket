<?php
/*---------------------------------------
/* pg_name: save_follow
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
フォロー情報を受け取りデーターベースに書き込む関数
引数：フォローした人のID($member_id),フォローされた人のID($followed_id)

*/


function save_follow($member_id,$followed_id){

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "INSERT INTO follow(member_id,follow_member_id) VALUES('".$member_id."','".$followed_id."');";
	mysqli_query($cn,$sql);
	mysqli_close($cn);

}

?>