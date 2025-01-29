<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($stg)
{
    return htmlspecialchars($stg, ENT_QUOTES);
}

//DB接続
function db_conn()
{
    try {
        $db_name = '*****';    //データベース名
        $db_id   = '*****';      //アカウント名
        $db_pw   = '*****';      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = '*****'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

//SQLエラー
function sql_error($stmt)
{
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('SQLError:' . $error[2]);
}

//リダイレクト
function redirect($file_name)
{
    header('Location: ' . $file_name);
    exit();
}


// ログインチェック処理 loginCheck()
function loginCheck()
{
    if (!isset($_SESSION['check_ssid']) || $_SESSION['check_ssid'] != session_id()) {
        // ログインを経由していない場合
        exit('ログインエラー');
    }

    session_regenerate_id(true);
    $_SESSION['check_ssid'] = session_id();
}