<?php
// トップページ
require_once 'functions.php';

session_start();
redirectToLoginPageIfNotLoggedIn();

$user_login_name = $_SESSION['user_login_name'];

$database = getDatabase();
?>

<html>
    <head>
        <title>Yastodon(ヤストドン)</title>
        <link rel="stylesheet" href="/css/style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="wrapper">
            <div class="container myself-container">
                <div class="myself">
                    <div class="user-icon"></div>
                    <div class="user-name"></div>
                </div>
                <form enctype="multipart/form-data" method="post" action="/post_toot.php">
                    <textarea name="text" placeholder="今なにしてる？" required></textarea>
                    <input type="file" name="image">
                    <div class="toot-button-container">
                        <input type="submit" class="toot-button" value="トゥート!">
                    </div>
                </form>
            </div>

            <div class="container toot-container">
              <div class="label icon-home"><img class="label-icon" src="/img/home.png" width="15" alt="Home - ">ホーム</div>
              <ul>
                <li>
                  <img src="icon.png" width="30" height="30"></img>
                  <div>
                    <div class="name_ID">
                      <div>投稿者名</div>
                      <div>ID</div>
                    </div>
                    <p>本文</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="container about-container">
                <div class="label icon-asterisk"><img class="label-icon" src="/img/asterisk.png" width="15" alt="Start - ">スタート</div>
                <div class="contents">
                    <p>
                        Yastodonとは研修のために作られた教育用ソーシャル・ネットワーキング・サービスです。<br>
                        あなただけの素敵なサービスをここから成長させていってください。
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
