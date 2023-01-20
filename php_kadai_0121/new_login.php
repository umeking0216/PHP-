<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン画面に戻る</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="register.php">
        <div class="jumbotron">
            <fieldset>
                <legend>新規登録</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>メールアドレス：<input type="text" name="lid"></label><br>
                <label>パスワード：<input type="text" name="lpw"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>