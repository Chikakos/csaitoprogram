<!--　INSERT文を変数に格納-->
$sql = "INSERT INTO fiend (name) values(:name)";
VALUES (:name);

<!--挿入する値は空のまま、SQL実行の準備をする-->
$stmt = $dbh->prepare($sql);

<!--挿入する値を配列に格納する-->
$params = array(':name' => '藤野');

<!--// 挿入する値が入った変数をexecuteにセットしてSQLを実行-->
$stmt->execute($params);

<!--登録完了のメッセージ-->
echo '登録完了しました';
