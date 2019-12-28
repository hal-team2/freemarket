<?php

/*---------------------------------------
/* pg_name: product_exhibit
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/12/28
/*--------------------------------------*/


/*---関数説明　[product_exhibit(商品名,商品説明,カテゴリ,状態,発送日時,価格,優先度)]
商品出品画面で各フォームに入力した項目をデータベースに書き込む
書き込み先テーブル⇒products,product_price,product_priority,decide_send_date

※画像アップロードの関数化はまだ※

----------------------------------------------------------------------------*/


//暫定で定数化
const HOST = 'localhost';
const DB_NAME = 'trustme';
const DB_USER = 'root';
const DB_PASS = '';
const UPLOAD_PATH = './image/products/';

//日付設定
date_default_timezone_set('Asia/Tokyo');


/*---------主処理----------*/
function product_exhibit($product_name,$product_summary,$product_category,$product_condition,$product_decide,$product_price,$priority){
    $product_name = $_POST["product_name"];
    $summary = $_POST["summary"];
    $category_id = $_POST["category"];
    //send_decide_date date⇒varchar
    //products category_id int⇒varchar
    //img_id 10⇒20

    //コンディション
    if($_POST["condition"] == 0){
        $product_condition = "新品・未使用";
    }elseif($_POST["condition"] == 1){
        $product_condition = "未使用に近い";
    }elseif($_POST["condition"] == 2){
        $product_condition = "目立った傷や汚れなし";
    }elseif($_POST["condition"] == 3){
        $product_condition = "やや傷や汚れあり";
    }elseif($_POST["condition"] == 4){
        $product_condition = "傷や汚れあり";
    }elseif($_POST["condition"] == 5){
        $product_condition = "全体的に状態が悪い";
    }

    $exhibitor_id = "ZANTEI";
    $price = $_POST["price"];

    //発送日時
    if($_POST["decide_date"] == 0){
        $decide_date = "1～2日";
    }elseif($_POST["decide_date"] == 1){
        $decide_date = "3～4日";
    }elseif($_POST["decide_date"] == 2){
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
    $new_record = sprintf('%05d',$id_new);
    $id_year = date("y");
    if($_POST["priority"] == "yes"){
        $id_priority = 1;
    }else{
        $id_priority = 0;
    }
    $product_id = "$category_id"."$id_year"."$id_priority"."$new_record";

    //画像処理
    /*$product_img = $product_id."."."jpg";
    if(isset($_FILES['pic'])){
        $upload_file = $_FILES["pic"];
        move_uploaded_file($upload_file['tmp_name'],UPLOAD_PATH.$product_img);
    }
    */
    

    //書き込み
    $sql_products = "INSERT INTO products(id,product_name,summary,category_id,product_condition,exhibitor_id)VALUES('$product_id','$product_name','$summary','$category_id','$product_condition','$exhibitor_id');";
    mysqli_query($cn,$sql_products);
    $sql_price = "INSERT INTO product_price(product_id,price)VALUES('$product_id','$price');";
    mysqli_query($cn,$sql_price);
    $sql_decide = "INSERT INTO decide_send_date(product_id,decide_date)VALUES('$product_id','$decide_date');"; 
    mysqli_query($cn,$sql_decide);
    $sql_priority = "INSERT INTO product_priority(product_id,priority)VALUES('$product_id','$id_priority');";
    mysqli_query($cn,$sql_priority);
    //$sql_img = "INSERT INTO product_img(product_id,img_id)VALUES('$product_id','$product_img');";
    //mysqli_query($cn,$sql_img);

    mysqli_close($cn);
}


//使用例
//if(isset($_POST["product_name"]) && isset($_POST["summary"]) && isset($_POST["category"]) && isset($_POST["condition"]) && isset($_POST["decide_date"]) && isset($_POST["price"]) && isset($_POST["priority"])){
//    product_exhibit($_POST["product_name"],$_POST["summary"],$_POST["category"],$_POST["condition"],$_POST["decide_date"],$_POST["price"],$_POST["priority"]);
//}


?>