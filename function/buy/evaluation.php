<?php
/*---------------------------------------
/* pg_name: evaluation
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
評価情報を受け取りデーターベースに書き込む関数
引数：会員ID,取引の態度評価情報,円滑さ評価情報

*/


function evaluation($member_id,$evalu_attitude,$evalu_smoothness){

	$point = array("good" => 0,"well" => 0,"bad" => 0);


	/*評価情報を配列に格納*/
	if($evalu_attitude == 'att_good'){
		$point["good"] += 1;

	}elseif($evalu_attitude == 'att_well'){
		$point["well"] += 1;

	}elseif($evalu_attitude == 'att_bad'){
		$point["bad"] += 1;
	}

	if($evalu_smoothness == 'smo_good'){
		$point["good"] += 1;

	}elseif($evalu_smoothness == 'smo_well'){
		$point["well"] += 1;

	}elseif($evalu_smoothness == 'smo_bad'){
		$point["bad"] += 1;

	}

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "SELECT COUNT(*) FROM trading_partner_val WHERE member_id = '".$member_id."';";
	$result = mysqli_query($cn,$sql);
	$cnt = mysqli_fetch_assoc($result);

/*------------評価が作成されていなければレコード作成----------*/
	if($cnt['COUNT(*)'] == 0){
		$sql = "INSERT INTO trading_partner_val(member_id,good_flg,well_flg,bad_flg) VALUES('".$member_id."',0,0,0);";
		mysqli_query($cn,$sql);
	}

/*------------データベース更新----------------------*/
	$sql = "UPDATE trading_partner_val SET good_flg = good_flg +".$point["good"].", well_flg = well_flg +".$point["well"].", bad_flg = bad_flg +".$point["bad"]." WHERE member_id = '".$member_id."';";
	mysqli_query($cn,$sql);

	mysqli_close($cn);

}


?>