<?php

/*---------------------------------------
/* pg_name: save_collect_day
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/12/28
/*--------------------------------------*/


/*
発送日時が確定された際にdecide_send_dateを更新する関数

引数：商品ID(str),集荷日(date),集荷時間(str)
戻り値：なし
*/


 // //暫定で定数化
 // const HOST = 'localhost';
 // const DB_NAME = 'trustme';
 // const DB_USER = 'root';
 // const DB_PASS = '';


//日付設定
date_default_timezone_set('Asia/Tokyo');


/*---------主処理----------*/
function save_collect_day($product_id,$date,$time){

/*--------------データベース接続-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,"utf8");

/*------------集荷日時書き込み---------------------*/
    $sql = "UPDATE decide_send_date SET decide_date = '".$date."', decide_time = '".$time."' WHERE product_id ='".$product_id."';";
    mysqli_query($cn,$sql);
    mysqli_close($cn);
}


?>