<?php
session_start();

$name         = '' ;
$name_kana    = '' ;
$sex          = '' ;
$birthday     = '' ;
$postal_code  = '' ;
$address      = '' ;
$phone_number = '' ;
$email        = '' ;
$primary_school = '' ;
$parent_name    = '' ;
$parent_kana    = '' ;
$workplace      = '' ;
$workplace_phone_number = '' ;
$parent_phone_number = '' ;
$health_level        = '' ;
$club                = '' ;
$request             = '' ;
$id                  = '' ;

if (isset($_SESSION['post']['name'])) {
    $name = $_SESSION['post']['name'];
}

if (isset($_SESSION['post']['name_kana'])) {
    $name_kana = $_SESSION['post']['name_kana'];
}

if (isset($_SESSION['post']['sex'])) {
    $sex = $_SESSION['post']['sex'];
}

if (isset($_SESSION['post']['birthday'])) {
    $birthday = $_SESSION['post']['birthday'];
}

if (isset($_SESSION['post']['postal_code'])) {
    $postal_code = $_SESSION['post']['postal_code'];
}

if (isset($_SESSION['post']['address'])) {
    $address = $_SESSION['post']['address'];
}

if (isset($_SESSION['post']['map'])) {
    $map = $_SESSION['post']['map'];
}

if (isset($_SESSION['post']['phone_number'])) {
    $phone_number = $_SESSION['post']['phone_number'];
}

if (isset($_SESSION['post']['email'])) {
    $email = $_SESSION['post']['email'];
}

if (isset($_SESSION['post']['primary_school'])) {
    $primary_school = $_SESSION['post']['primary_school'];
}

if (isset($_SESSION['post']['parent_name'])) {
    $parent_name = $_SESSION['post']['parent_name'];
}

if (isset($_SESSION['post']['parent_kana'])) {
    $parent_kana = $_SESSION['post']['parent_kana'];
}

if (isset($_SESSION['post']['workplace'])) {
    $workplace = $_SESSION['post']['workplace'];
}

if (isset($_SESSION['post']['workplace_phone_number'])) {
    $workplace_phone_number = $_SESSION['post']['workplace_phone_number'];
}

if (isset($_SESSION['post']['parent_phone_number'])) {
    $parent_phone_number = $_SESSION['post']['parent_phone_number'];
}

if (isset($_SESSION['post']['health_level'])) {
    $health_level = $_SESSION['post']['health_level'];
}

if (isset($_SESSION['post']['club'])) {
    $club = $_SESSION['post']['club'];
}

if (isset($_SESSION['post']['request'])) {
    $request = $_SESSION['post']['request'];
}


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

   <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
                body {
        font-family: 'Lato', sans-serif;
        color: white;
        background-color: teal;
        }
        /* h1 {
        font-size: 60px;
        margin: 0px;
        padding: 0px;
        }
        h3 {
        margin: 0px;
        padding: 0px;
        color: #999;
        } */

        /* div.wrap {
        width: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        vertical-align: middle;
        } */

        .title{
            color: white;
        }

        div.wrap div {
        position: relative;
        margin: 20px 0;
        }

        label {
        position: absolute;
        top: 0;
        font-size: 20px;
        margin: 10px;
        padding: 0 10px;
        background-color: teal;
        -webkit-transition: top .2s ease-in-out, 
                            font-size .2s ease-in-out;
        transition: top .2s ease-in-out, 
                    font-size .2s ease-in-out;
        }

        .active {
        top: -25px;
        font-size: 20px;
        }

        input[type=text] {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: teal;
        color: white;
        } 

        input[type=text]:focus {
        outline: none;
        }

        select {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: teal;
        color: white;
        } 

        select:focus {
        outline: none;
        }

        input[type=date] {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: teal;
        color: white;
        } 

        input[type=date]:focus {
        outline: none;
        }

        .btn-border {
        border: 2px solid #000;
        border-radius: 0;
        background: #fff;
        }

        .btn-border:hover {
        color: #fff;
        background: #000;
        }

        .btn {
    font-size: 1.6rem;
    font-weight: 700;
    line-height: 1.5;
    position: relative;
    display: inline-block;
    padding: 1rem 4rem;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    text-align: center;
    vertical-align: middle;
    text-decoration: none;
    letter-spacing: 0.1em;
    color: #212529;
    border-radius: 0.5rem;

 }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div> 
                <div class="navbar-header"><a class="navbar-brand" href="new_login.php">新規登録</a></div> 
            </div>
        </nav>
    </header>

   <?php if (isset($_GET['error'])) : ?>
        <p class='text-danger'>記入内容を確認してください。</p>
    <?php endif ?>


    <form method="POST" action="confirm.php" enctype="multipart/form-data">
        <div class="wrap">
            <fieldset>
                <legend class="title">家庭環境調べ登録画面</legend>
                <div>
                    <label>生徒氏名</label>
                    <input type="text" name="name" class="cool" value="<?= $name ?>"><br>
                </div>
                <div>
                    <label>ふりがな</label>
                    <input type="text" name="name_kana" class="cool" value = "<?= $name_kana ?>"><br>
                </div>

                <div>
                    <label>顔写真</label>
                    <br>
                    <br>
                    <input type="file" name="img" class="cool" value = "<?= $img ?>"><br>
                </div>

                <div>
                    <label>性別</label>
                    <select name="sex" class="cool" value="<?= $sex ?>">
                      <option value="">  </option>
                      <option value="男">男</option>
                      <option value="女">女</option>
                      <option value="その他">その他</option>
                    </select>
                 </div>
                <div>
                    <label>生年月日</label>
                    <input type="date" name="birthday" class="cool" value="<?= $birthday ?>"><br>
                </div>
                <div>
                    <label>郵便番号</label>
                    <input type="text" name="postal_code" class="cool" value="<?= $postal_code ?>"><br>
                </div>
                <div>
                    <label>現住所</label>
                    <input type="text" name="address" class="cool" value="<?= $address ?>"><br>
                </div>
                <!-- <label><a href=map.php>地図を開いてピン止め</a>：<input type="text" name="map"></label><br> -->
                <div>
                    <label>連絡先</label>
                    <input type="text" name="phone_number" class="cool" value="<?= $phone_number ?>"><br>
                </div>
                <div>
                    <label>連絡先メールアドレス</label>
                    <input type="text" name="email" class="cool" value="<?= $email ?>"><br>
                </div>
                <div>
                    <label>出身小学校</label>
                    <input type="text" name="primary_school" class="cool" value="<?= $primary_school ?>"><br>
                </div>
                <div>
                    <label>保護者（１）氏名</label>
                    <input type="text" name="parent_name" class="cool" value="<?= $parent_name ?>"><br>
                </div>
                <div>
                    <label>ふりがな</label>
                    <input type="text" name="parent_kana" class="cool" value="<?= $parent_kana ?>"><br>
                </div>
                <div>
                    <label>勤務先</label>
                    <input type="text" name="workplace" class="cool" value="<?= $workplace ?>"><br>
                </div>
                <div>
                    <label>勤務先TEL</label>
                    <input type="text" name="workplace_phone_number" class="cool" value="<?= $workplace_phone_number ?>"><br>
                </div>
                <div>
                    <label>携帯</label>
                    <input type="text" name="parent_phone_number" class="cool" value="<?= $parent_phone_number ?>"><br>
                </div>
                <div>
                    <label>身体状況</label>
                    <input type="text" name="health_level" class="cool" value="<?= $health_level ?>"><br>
                </div>
                <div>
                    <label>習い事・クラブ活動等</label>
                    <input type="text" name="club" class="cool" value="<?= $club ?>"><br>
                </div>
                <div>
                    <label>保護者の要望</label>
                    <input type="text" name="request" class="cool" value="<?= $request ?>"><br>
                </div>

                <input type="submit" value="確認" class="btn btn-border">
            </fieldset>
        </div>
    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$('input').on('focusin', function() {
  $(this).parent().find('label').addClass('active');
});

$('input').on('focusout', function() {
  if (!this.value) {
    $(this).parent().find('label').removeClass('active');
  }
});

$('select').on('focusin', function() {
  $(this).parent().find('label').addClass('active');
});

$('select').on('focusout', function() {
  if (!this.value) {
    $(this).parent().find('label').removeClass('active');
  }
});
</script>

</body>

</html>