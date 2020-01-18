<?php
/*---------------------------------------
/* pg_name: contoroll
/*---------------------------------------
/* IH12A905-team2: name
/*---------------------------------------
/* date: 2019/
/*--------------------------------------*/

/*---------主処理----------*/

if(isset($_GET['id']) == true){
  require 'template/member/member.php';
  exit;
}
else if(isset($_GET['back']) == true){
  require 'template/index.php';
  exit;
}
require 'template/index.php';
exit;
?>