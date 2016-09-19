<?php
$personal_name = $_POST['personal_name'];
$contents = $_POST['contents'];
$contents = nl2br($contents);

$db = 'discussion_board'; // データベース名
$host = 'localhost';  // ホスト名
$user = 'root'; // ユーザ名
$password = 'root'; //パスワード

// データベース接続オブジェクトを生成
$dbh = new PDO("mysql:dbname={$db};host={$host};charset=utf8;", $user, $password);

// SQL文の作成
$sql = 'INSERT INTO comments (name,message) VALUES (:name,:message)';

// SQL文のオブジェクトを取得
$stmt = $dbh->prepare($sql);

//var_dump($personal_name);

// 値をパラメータにバインド
$stmt->bindValue(':name',$personal_name);
$stmt->bindValue(':message',$contents);

// SQL実行
$stmt->execute();

// データベース接続オブジェクトを破棄
$dbh = null;
?>

<html>
<head><title>掲示板</title></head>
<body>

<p>投稿 <?php echo $personal_name ?> </p>
<p>内容:</p>
<p><?php echo $contents ?></p>

<a href="http://localhost:8888/csaitoprogram/issue_08/select_created_at.php">LINK</a>

</body>
</html>
