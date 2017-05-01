<?php


/**
 * データベースへ接続するためのオブジェクトを取得する
 *
 * @return PDO
 */
function getDatabase() {
    return new PDO('mysql:host=localhost;port=8889;dbname=database', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}

/**
 * ログインしていなかったらログインページで移動する
 */
function redirectToLoginPageIfNotLoggedIn() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: /login.php');
        exit;
    }
}

/**
 * ファイルをサーバーに保存して、保存したファイル名を返す
 *
 * @param $tmp_file_path $_FILES['uploaded_file']
 * @return string 保存したファイル名
 */
function uploadFile($file){
  // 良い感じにかぶらないファイル名を作る
  $image_file_name = md5(mt_rand()) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
  $upload_path = dirname(__FILE__) . '/uploaded_image/' . $image_file_name;

  // その場所に保存してみてダメだったらエラー
  if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
    throw new Exception('なんかやばいエラー', 1);
  }

  // 保存したファイル名返す
  return $image_file_name;
}
