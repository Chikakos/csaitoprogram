<?php
  $comment = $_post["message"];
  echo $message;
?>
<!DOCTYPE html>
<html lang = "ja">
  <head>
    <meta charset = "uft8">
    <title>フォームからデータを受け取る</title>
  </head>
  <body>
    <h1>フォームデータの送信</h1>
    <!--
    form
      action: どこに送るか？=index.php→作る
      method: get→データがURLで引き渡される
            : post→データがURLで引き渡されない
            *URLにデータを含めてもいい内容かどうか
      input: name=入力内容に名前
    -->

    <form action = "test_post.php" method = "post">
        <input type = "text" name ="message"><br/>
        <input type = "submit" value ="送信">
    </form>
  </body>
</html>
