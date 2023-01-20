<?php
// confirm.phpの中身は、ほとんどpost.phpに似ています。
session_start();
require_once('funcs.php');
require_once('common/head_parts.php');
require_once('common/header_nav.php');

loginCheck();

// post受け取る
//1. POSTデータ取得
$name         = $_POST['name'];
$name_kana    = $_POST['name_kana'];
$sex          = $_POST['sex'];
$birthday     = $_POST['birthday'];
$postal_code  = $_POST['postal_code'];
$address      = $_POST['address'];
// $map          = $_POST['map'];
$phone_number = $_POST['phone_number'];
$email        = $_POST['email'];
$primary_school = $_POST['primary_school'];
$parent_name    = $_POST['parent_name'];
$parent_kana    = $_POST['parent_kana'];
$workplace      = $_POST['workplace'];
$workplace_phone_number = $_POST['workplace_phone_number'];
$parent_phone_number = $_POST['parent_phone_number'];
$health_level        = $_POST['health_level'];
$club                = $_POST['club'];
$request             = $_POST['request'];
$_SESSION['post']['name']         = $_POST['name'];
$_SESSION['post']['name_kana']   = $_POST['name_kana'];
$_SESSION['post']['sex']         = $_POST['sex'];
$_SESSION['post']['birthday']    = $_POST['birthday'];
$_SESSION['post']['postal_code']  = $_POST['postal_code'];
$_SESSION['post']['address']      = $_POST['address'];
// $map          = $_POST['map'];
$_SESSION['post']['phone_number'] = $_POST['phone_number'];
$_SESSION['post']['email']        = $_POST['email'];
$_SESSION['post']['primary_school'] = $_POST['primary_school'];
$_SESSION['post']['parent_name']    = $_POST['parent_name'];
$_SESSION['post']['parent_kana']    = $_POST['parent_kana'];
$_SESSION['post']['workplace']     = $_POST['workplace'];
$_SESSION['post']['workplace_phone_number'] = $_POST['workplace_phone_number'];
$_SESSION['post']['parent_phone_number'] = $_POST['parent_phone_number'];
$_SESSION['post']['health_level']        = $_POST['health_level'];
$_SESSION['post']['club']                = $_POST['club'];
$_SESSION['post']['request']            = $_POST['request'];

if ($_FILES['img']['name'] !=="") {
    // $_SESSION['post']['file_name'] = $_FILES['img']['name'];
    // $file_name = $_FILES['img']['name'];

    $file_name = $_SESSION['post']['file_name'] = $_FILES['img']['name'];

    // 画像データを取得、tmp_nameはvar_dumpで見ると入っているのがわかる。
    $image_data = $_SESSION['post']['image_data'] = file_get_contents($_FILES['img']['tmp_name']); 

    // 画像タイプを取得
    $image_type = $_SESSION['post']['image_type'] = exif_imagetype($_FILES['img']['tmp_name']);
} 
else {
    $file_name = $_SESSION['post']['file_name'] = '';
    $image_data = $_SESSION['post']['image_data'] = '';
    $image_type = $_SESSION['post']['image_type'] = '';
}




// formで送られてきたら
// if ($_FILES['img']['name'] !== '') {
//     $file_name = $_SESSION['post']['file_name'] = $_FILES['img']['name'];
//     $image_data = $_SESSION['post']['image_data'] = file_get_contents($_FILES['img']['tmp_name']);
//     $image_type = $_SESSION['post']['image_type'] = exif_imagetype($_FILES['img']['tmp_name']);

// ファイルで送らないけどセッションの中にデータがあれば
// } elseif($_FILES['img']['name'] === '' && $_SESSION['post']['image_data'] !== '') {
//     $file_name = $_SESSION['post']['file_name'];
//     $image_data = $_SESSION['post']['image_data'];
//     $image_type = $_SESSION['post']['image_type'];

// // formにも、セッションにも何もデータがなければ。
// } else {
//     $file_name = $_SESSION['post']['file_name'] = '';
//     $image_data = $_SESSION['post']['image_data'] = '';
//     $image_type = $_SESSION['post']['image_type'] = '';
// }


// 簡単なバリデーション処理。
if (trim($name ) === '' || trim($name_kana) === '' ||
    trim($sex) === '' || trim($birthday) === '' ||
    trim($postal_code) === '' || trim($address) === '' ||
    trim($phone_number) === '' || trim($email) === '' ||
    trim($primary_school) === '' || trim($parent_name) === '' ||
    trim($parent_kana) === '' ||
    trim($workplace) === '' || trim($workplace_phone_number) === '' ||
    trim($parent_phone_number) === '' || trim($health_level) === '' ||
    trim($club ) === '' || trim($request ) === '')
     {
    redirect('index.php?error');
}

// if (!empty($file_name)) {
//     $extension = substr($file_name, -3);
//     if ($extension != 'jpg' && $extension != 'gif' && $extension != 'png') {
//         redirect('post.php?error=1');
//     }
// }

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?= head_parts('記事管理') ?>
</head>

<body>
    <?=  $header_nav?>
    <!-- errorを受け取ったら、エラー文出力。 -->

    <form method="POST" action="insert.php" enctype="multipart/form-data" class="mb-3">
        <div class="mb-3">
            <label for="title" class="form-label">生徒名簿</label>
            <input type="hidden"name="name" value="<?= $name ?>">
            <p><?= $name ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">ふりがな</label>
            <input type="hidden"name="name_kana" value="<?= $name_kana ?>">
            <div><?= $name_kana ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">性別</label>
            <input type="hidden"name="sex" value="<?= $sex ?>">
            <p><?= $sex ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">生年月日</label>
            <input type="hidden"name="birthday" value="<?= $birthday ?>">
            <div><?= $birthday ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">郵便場号</label>
            <input type="hidden"name="postal_code" value="<?= $postal_code ?>">
            <p><?= $postal_code ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">現住所</label>
            <input type="hidden"name="address" value="<?= $address ?>">
            <div><?= $address ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">連絡先</label>
            <input type="hidden"name="phone_number" value="<?= $phone_number?>">
            <p><?= $phone_number ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">連絡先メールアドレス</label>
            <input type="hidden"name="email" value="<?= $email ?>">
            <div><?= $email ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">出身小学校</label>
            <input type="hidden"name="primary_school" value="<?= $primary_school ?>">
            <p><?= $primary_school ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">保護者（１）氏名</label>
            <input type="hidden"name="parent_name" value="<?= $parent_name?>">
            <div><?= $parent_name ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">ふりがな</label>
            <input type="hidden"name="parent_kana" value="<?= $parent_kana?>">
            <p><?= $parent_kana ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">勤務先</label>
            <input type="hidden"name="workplace" value="<?= $workplace ?>">
            <div><?= $workplace ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">勤務先TEL</label>
            <input type="hidden"name="workplace_phone_number" value="<?= $workplace_phone_number ?>">
            <p><?= $workplace_phone_number  ?></p>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">携帯</label>
            <input type="hidden"name="parent_phone_number" value="<?= $parent_phone_number ?>">
            <div><?= $parent_phone_number ?></div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">身体状況</label>
            <input type="hidden"name="health_level" value="<?= $health_level ?>">
            <p><?= $health_level ?></p>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">習い事・クラブ活動等</label>
            <input type="hidden"name="club" value="<?= $club ?>">
            <p><?= $club ?></p>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">保護者の要望</label>
            <input type="hidden"name="request" value="<?= $request ?>">
            <div><?= $request ?></div>
        </div>

        <?php if ($image_data) :?> 
            <div class="mb-3">
                <img src="image.php">
            </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">登録</button>
    </form>

    <a href="index.php?re-register=true">前の画面に戻る</a>
</body>
</html>
