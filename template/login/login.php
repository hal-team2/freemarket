<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ログイン画面</title>
  <meta name="description" content="サイトキャプションを入力">
  <meta name="keywords" content="サイトキーワードを,で区切って入力">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<div class="header">
  <p><a href="../yonesho/index.html"><img src="./img/logo.png" alt="TRUSTME"></a></p>
</div>
<div class="main">
    <br>
    <br>
    <p><input type="text" name="mail" class="textbox" placeholder="メールアドレス"></p>
    <p><input type="password" name="pass" class="textbox" placeholder="パスワード"></p>
    <br>
    <p><button type="submit" name="login" class="bt-design">ログイン</button></p>
    <br>
    <p><a href="#" class="font">パスワードをお忘れの方</a></p>
    <br>
    <hr>
    <br>
    <br>
    <p class="font">アカウントをお持ちでない方はこちら</p>
    <p><button type="submit" name="newaccount" class="bt-design2" onclick="location.href='../prottype_yamada/member/member_register.html'">新規会員登録</button></p>
</div>
<div class="footer">
  <div class="content">
    <div class="copyright">
    <p>&copy; TRUSTme</p>
    </div>
  </div>
</div>
</body>
</html>