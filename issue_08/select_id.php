<?php
$db = 'discussion_board'; // データベース名
$host = 'localhost';  // ホスト名
$user = 'root'; // ユーザ名
$password = 'root'; //パスワード

// データベース接続オブジェクトを生成
$dbh = new PDO("mysql:dbname={$db};host={$host};charset=utf8;", $user, $password);

// SQL文の作成
$sql  = "SELECT * FROM comments ORDER BY id DESC";

// SQL文のオブジェクトを取得
$stmt = $dbh->prepare($sql);

// SQL実行
$stmt->execute();

// 実行結果を配列で取得
$rows = $stmt->fetchAll();

// データベース接続オブジェクトを破棄
$dbh = null;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>HTML内でのPHPスクリプト - PHP入門</title>
</head>
<body>

  <?php foreach ($rows as $row)  { ?>
    <P>no.<?php echo $row['id']; ?></p>
    <P>投稿者 <?php echo $row['name'];?></P>
    <P>内容 <?php echo $row['message'];?></P>
  <?php } ?>

  <a href="http://localhost:8888/csaitoprogram/issue_08/discussion%20board.php">LINK</a>

</body>
</html>
