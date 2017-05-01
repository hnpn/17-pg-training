<?php
require_once 'functions.php';
// トゥート投稿

session_start();
redirectToLoginPageIfNotLoggedIn();

// 保存処理を書く

// var_dump($_POST);
$text = $_POST['text'];
$user_id = $_SESSION['user_id'];
$created_at = date("Y-m-d H:i:s");
$image_file_name = uploadFile($_FILES["image"]);

//ファイルアップロード

$database = getDatabase();
// var_dump($database); exit();
$database->query("
    INSERT INTO `toot` (
      `user_id`,
      `text`,
      `image_file_name`,
      `created_at`
    ) VALUES (
      '{$user_id}',
      '{$text}',
      '{$image_file_name}',
      '{$created_at}'
    )
");

header('Location: /');
