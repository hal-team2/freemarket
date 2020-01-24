<?php

/*---------------------------------------
/* pg_name: product_exhibit
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/12/28
/*--------------------------------------*/


/*---関数説明　[product_exhibit(商品画像,商品名,商品説明,カテゴリ,状態,発送日時,価格,優先度,出品者ID)]
商品出品画面で各フォームに入力した項目をデータベースに書き込む
書き込み先テーブル⇒products,product_price,product_priority,product_img,decide_send_date,

----------------------------------------------------------------------------*/


 //暫定で定数化
 const HOST = 'localhost';
 const DB_NAME = 'trustme';
 const DB_USER = 'root';
 const DB_PASS = '';
 const UPLOAD_PATH = 'image/products/';

//日付設定
date_default_timezone_set('Asia/Tokyo');


/*---------主処理----------*/
function product_exhibit($upload_file,$product_name,$product_summary,$product_category,$product_condition,$product_decide,$product_price,$priority,$exhibitor_id){

    $product_price = mb_convert_kana($product_price,'n');

	//商品概要
    if(isset($product_summary) && is_array($product_summary)){
        $summary = implode(",", $product_summary);
    }


    //商品状態（配列でうけとったのを文字列に）
    if(isset($product_condition) && is_array($product_condition)){
        $condition = implode(",", $product_condition);
    }

    //発送日時
    if($product_decide == 2){
        $decide_date = "1～2日";
    }elseif($product_decide == 4){
        $decide_date = "3～4日";
    }elseif($product_decide == 7){
        $decide_date = "4～7日";
    }


    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,"utf8");

    //テーブル内レコード数のカウント
    $sql_count = "SELECT count(*) as id_count from products;";
    $count = mysqli_query($cn,$sql_count);
    $result_count = mysqli_fetch_assoc($count);
    $id_max = $result_count["id_count"];

    //新レコードのID決め
    $id_new = $id_max + 1;
        //連番の0埋め
        $new_record = sprintf('%05d',$id_new);
    $id_year = date("y");

    $product_id = "$product_category"."$id_year"."$priority"."$new_record";

    //画像処理 
    $product_img = $product_id."."."jpg";
    if(isset($upload_file)){
        move_uploaded_file($upload_file['tmp_name'],UPLOAD_PATH.$product_img);
    }


    //書き込み
    $sql_products = "INSERT INTO products(id,product_name,summary,category_id,product_condition,send_date,exhibitor_id,sell)VALUES('".$product_id."','".$product_name."','".$summary."','".$product_category."','".$condition."','".$decide_date."','".$exhibitor_id."',0);";
    mysqli_query($cn,$sql_products);
    $sql_price = "INSERT INTO product_price(product_id,price)VALUES('".$product_id."','".$product_price."');";
    mysqli_query($cn,$sql_price);



    //*************TODO 発送期限を日付で登録****************
    $sql_decide = "INSERT INTO decide_send_date(product_id,decide_date)VALUES('".$product_id."','".$decide_date."');"; 
    mysqli_query($cn,$sql_decide);



    $sql_priority = "INSERT INTO product_priority(product_id,priority)VALUES('".$product_id."','".$priority."');";
    mysqli_query($cn,$sql_priority);
    $sql_img = "INSERT INTO product_img(product_id,img_id)VALUES('".$product_id."','".$product_img."');";
    mysqli_query($cn,$sql_img);

    mysqli_close($cn);
}

?>