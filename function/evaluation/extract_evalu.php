<?php
/*---------------------------------------
/* pg_name: extract_evalu
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
会員IDから評価情報を呼び出す関数
引数：会員ID
戻り値：連想配列
'good' => 良い評価の数
well' => 普通評価の数
'bad' => 悪い評価の数

*/


function extract_evalu($member_id){

/*--------------データベース接続-------------------------*/
	$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($cn,"utf8");

	$sql = "SELECT COUNT(*) FROM trading_partner_val WHERE member_id = '".$member_id."';";
	$result = mysqli_query($cn,$sql);
	$cnt = mysqli_fetch_assoc($result);

/*------------評価が作成されていなければ全て0を返す---------*/
	if($cnt['COUNT(*)'] == 0){
		$evalu = [
			'good' => 0,
			'well' => 0,
			'bad' => 0
		];

	}else{
		$sql = "SELECT good_flg,well_flg,bad_flg FROM trading_partner_val WHERE member_id ='".$member_id."';";
		$result = mysqli_query($cn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$evalu = [
				'good' => $row['good_flg'],
				'well' => $row['well_flg'],
				'bad' => $row['bad_flg']
			];
		}
	}

	mysqli_close($cn);
	return $evalu;

}

?>