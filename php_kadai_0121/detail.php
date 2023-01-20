<?php
session_start();
require_once('funcs.php');
loginCheck();
/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */

 $id =$_GET['id'];

 require_once('funcs.php');
 $pdo = db_conn();

$stmt = $pdo->prepare('SELECT * FROM gs_an_table_0107 WHERE id =:id ;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();


//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
     //データが取得できた際の処理
     $result = $stmt->fetch();


}




?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ修正</title>
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
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>家庭環境調べ</legend>
                <label>生徒氏名：<input type="text" name="name" value="<?=h($result['name'])?>"></label><br>
                <label>ふりがな：<input type="text" name="name_kana" value="<?=h($result['name_kana'])?>"></label><br>
                <label>性別：
                    <select name="sex" value="<?=h($result['sex'])?>">
                      <option value="">  </option>
                      <option value="男">男</option>
                      <option value="女">女</option>
                      <option value="その他">その他</option>
                    </select>
                <label>生年月日：<input type="date" name="birthday" value="<?=h($result['birthday'])?>"></label><br>
                <label>郵便番号：<input type="text" name="postal_code" value="<?=h($result['postal_code'])?>"></label><br>
                <label>現住所：<input type="text" name="address" value="<?=h($result['address'])?>"></label><br>
                <!-- <label>自宅地図：<input type="text" name="map" value="<?=h($result['map'])?>"></label><br> -->
                <label>連絡先：<input type="text" name="phone_number" value="<?=h($result['phone_number'])?>"></label><br>
                <label>連絡先メールアドレス：<input type="text" name="email" value="<?=h($result['email'])?>"></label><br>
                <label>出身小学校：<input type="text" name="primary_school" value="<?=h($result['primary_school'])?>"></label><br>
                <label>保護者（１）氏名：<input type="text" name="parent_name" value="<?=h($result['parent_name'])?>"></label><br>
                <label>ふりがな：<input type="text" name="parent_kana" value="<?=h($result['parent_kana'])?>"></label><br>
                <label>勤務先：<input type="text" name="workplace" value="<?=h($result['workplace'])?>"></label><br>
                <label>勤務先TEL:<input type="text" name="workplace_phone_number" value="<?=h($result['workplace_phone_number'])?>"></label><br>
                <label>携帯：<input type="text" name="parent_phone_number" value="<?=h($result['parent_phone_number'])?>"></label><br>
                <label>身体状況：<input type="text" name="health_level" value="<?=h($result['health_level'])?>"></label><br>
                <label>習い事・クラブ活動等：<input type="text" name="club" value="<?=h($result['club'])?>"></label><br>
                <label>保護者の要望：<input type="text" name="request" value="<?=h($result['request'])?>"></label><br>
                <?php if($content['img']) : ?>
                                <!-- 画像が登録されている場合は↓ -->
                                <img src="images/<?= $content['img'] ?>" alt="" class="bd-placeholder-img card-img-top" >
                            <?php else : ?>
                                <!-- 画像が登録されていない場合↓ -->
                                <img src="images/default_image/no_image_logo.png" alt="" class="bd-placeholder-img card-img-top" >
                            <?php endif ?>
                <input type="hidden" name="id" value="<?=h($result['id'])?>">
                <input type="submit" value="修正">
            </fieldset>
        </div>
    </form>
</body>

</html>