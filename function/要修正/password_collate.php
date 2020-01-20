<?php
/*---------------------------------------
/* pg_name: password_collate
/*---------------------------------------
/* IH12A905 team2:
/*---------------------------------------
/* date: 2019/12/26
/*--------------------------------------*/


/*---関数説明　[pass_collate(入力メールアドレス,入力パスワード)]
ログイン画面で各フォーム内にメールアドレスとパスワードを入力
テーブルmember内のメールアドレスとパスワードと照合
両者一致していればtrueを返す
-----------------------------------------------------------*/

//暫定で定数化
const HOST = 'localhost';
const DB_NAME = 'trustme';
const DB_USER = 'root';
const DB_PASS = '';


/*---------主処理----------*/
function pass_collate($input_mail,$input_pass){
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "SELECT * from member WHERE mail = '$mail' and password = '$pass';";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result); 
    if(!$row == NULL){
        return true;
    }else{
        return false;
    }

    mysqli_close($cn); 
      
}

?>