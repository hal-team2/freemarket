<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>
        会員登録ページ
    </title>
    <link rel="stylesheet" href="./css/register.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
</head>
<body>
<div id="wrap"> 
    <div id="header">
        <p><a href=""><img src="img/logo_sq.png"></a></p>
    </div>    
    <div class="main">    
        <h1>会員登録</h1>
        <div id="username">
        <h2>会員名</h2>
            <p>姓<input type="text" name="lastname" size="18"></p>
            <p>名<input type ="text" name="firstname" size="18"></p> 
        </div>
        <hr>
        <div id="gender">
            <h2>性別</h2>
            <p>男<input type="radio" name="gender" value="male" checked></p>
            <p>女<input type="radio" name="gender" value="female"></p>
        </div>
        <hr>
        <div id="birthday">
            <h2>生年月日</h2>
            <p>西暦<input type="text" name="birthday_year" size="4" maxlength="4">年/<input type="text" name="birthday_month" size="2" maxlength="2">月/<input type="text" name="birthday_date" size="2" maxlength="2">日</p>
        </div>
        <hr>
        <div id="address">
            <h2>住所</h2>
            <div class="form_add">
        <p>国　<select name="country">
                <option value="japan">日本</option>
                <option value="China">中国</option>
                <option value="Korea">韓国</option>
                <option value="America">America</option>
                <option value="UK">United Kingdom</option>
                <option value="EU">Eurozone</option>
                <option value="Russia">Россия</option>
                <option value="Australia">Australia</option>
            </select> 
        </p>
        <p>都道府県 <input type="text" name="address_pref"> 市町村区 <input type="text" name="address_city"></p>
        <p>町名・番地 <input type="text" name="address_block" size="40"></p>
        <p>マンション・ビル名 <input type="text" name="address_building" size="40"></p>
            </div>
        </div>
        <div id="pagechange">
            <p><a href="member_register_2.html">次へ</a></p>
        </div>
    </div>
    <div class="footer">
            <div class="copyright"><p>&copy; TRUSTme</p></div>
    </div>    
</div>
</body>
</html>