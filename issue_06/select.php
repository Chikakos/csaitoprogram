<?php
$a = 'chikako'; // データベース名
$host = 'localhost';  // ホスト名
$user = 'root'; // ユーザ名
$password = 'root'; //パスワード

// データベース接続オブジェクトを生成
$dbh = new PDO("mysql:dbname={$a};host={$host};charset=utf8;", $user, $password);

// SQL文の作成
$sql  = "SELECT * FROM fiend where name = '加藤'";

// SQL文のオブジェクトを取得
$stmt = $dbh->prepare($sql);

#var_dump($stmt);

// SQL実行
$stmt->execute();

// 実行結果を配列で取得
$rows = $stmt->fetchAll();

// 配列を展開
foreach ($rows as $row) {
  echo $row['name'];  // データベースの値を取得
}

// データベース接続オブジェクトを破棄
$dbh = null;
